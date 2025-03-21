<?php

namespace App\Livewire\Game;

use Livewire\Component;

class Blackjack extends Component
{
    public $playerHand = [];
    public $dealerHand = [];
    public $deck = [];
    public $playerScore = 0;
    public $dealerScore = 0;
    public $gameStatus = 'waiting'; // waiting, playing, playerBust, dealerBust, playerWin, dealerWin, push
    public $message = 'Press Deal to start a new game';
    public $dealerTurn = false;
    
    public function mount()
    {
        $this->initializeDeck();
    }
    
    public function render()
    {
        return view('livewire.game.blackjack');
    }
    
    public function initializeDeck()
    {
        $this->deck = [];
        $suits = ['hearts', 'diamonds', 'clubs', 'spades'];
        $values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
        
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $this->deck[] = [
                    'suit' => $suit,
                    'value' => $value,
                    'numericValue' => $this->getCardValue($value)
                ];
            }
        }
        
        // Shuffle the deck
        shuffle($this->deck);
    }
    
    private function getCardValue($value)
    {
        if (in_array($value, ['J', 'Q', 'K'])) {
            return 10;
        } elseif ($value === 'A') {
            return 11; // Ace initially counts as 11
        } else {
            return (int) $value;
        }
    }
    
    private function drawCard()
    {
        if (empty($this->deck)) {
            $this->initializeDeck();
        }
        
        return array_pop($this->deck);
    }
    
    public function deal()
    {
        $this->resetGame();
        
        // Deal 2 cards to player and dealer
        $this->playerHand[] = $this->drawCard();
        $this->dealerHand[] = $this->drawCard();
        $this->playerHand[] = $this->drawCard();
        $this->dealerHand[] = $this->drawCard();
        
        $this->calculateScores();
        
        // Check for blackjack
        if ($this->playerScore === 21 && $this->dealerScore === 21) {
            $this->gameStatus = 'push';
            $this->message = 'Both have Blackjack! Push.';
            $this->dealerTurn = true;
        } elseif ($this->playerScore === 21) {
            $this->gameStatus = 'playerWin';
            $this->message = 'Blackjack! You win!';
            $this->dealerTurn = true;
        } elseif ($this->dealerScore === 21) {
            $this->gameStatus = 'dealerWin';
            $this->message = 'Dealer has Blackjack! You lose.';
            $this->dealerTurn = true;
        } else {
            $this->gameStatus = 'playing';
            $this->message = 'Your turn - Hit or Stand?';
        }
    }
    
    private function resetGame()
    {
        if (count($this->deck) < 15) {
            $this->initializeDeck();
        }
        
        $this->playerHand = [];
        $this->dealerHand = [];
        $this->playerScore = 0;
        $this->dealerScore = 0;
        $this->gameStatus = 'playing';
        $this->message = 'Your turn - Hit or Stand?';
        $this->dealerTurn = false;
    }
    
    public function hit()
    {
        if ($this->gameStatus !== 'playing' || $this->dealerTurn) {
            return;
        }
        
        $this->playerHand[] = $this->drawCard();
        $this->calculateScores();
        
        if ($this->playerScore > 21) {
            $this->gameStatus = 'playerBust';
            $this->message = 'Bust! You lose.';
            $this->dealerTurn = true;
        } elseif ($this->playerScore === 21) {
            $this->stand();
        }
    }
    
    public function stand()
    {
        if ($this->gameStatus !== 'playing') {
            return;
        }
        
        $this->dealerTurn = true;
        $this->dealerPlay();
    }
    
    private function dealerPlay()
    {
        $this->calculateScores();
        
        // Dealer hits until score is 17 or higher
        while ($this->dealerScore < 17) {
            $this->dealerHand[] = $this->drawCard();
            $this->calculateScores();
        }
        
        // Determine winner
        if ($this->dealerScore > 21) {
            $this->gameStatus = 'dealerBust';
            $this->message = 'Dealer busts! You win!';
        } elseif ($this->dealerScore > $this->playerScore) {
            $this->gameStatus = 'dealerWin';
            $this->message = 'Dealer wins with ' . $this->dealerScore . ' vs your ' . $this->playerScore . '.';
        } elseif ($this->dealerScore < $this->playerScore) {
            $this->gameStatus = 'playerWin';
            $this->message = 'You win with ' . $this->playerScore . ' vs dealer\'s ' . $this->dealerScore . '!';
        } else {
            $this->gameStatus = 'push';
            $this->message = 'Push! Both have ' . $this->playerScore . '.';
        }
    }
    
    private function calculateScores()
    {
        $this->playerScore = $this->calculateHandScore($this->playerHand);
        $this->dealerScore = $this->calculateHandScore($this->dealerHand);
    }
    
    private function calculateHandScore($hand)
    {
        $score = 0;
        $aces = 0;
        
        foreach ($hand as $card) {
            $score += $card['numericValue'];
            if ($card['value'] === 'A') {
                $aces++;
            }
        }
        
        // Adjust for aces if bust
        while ($score > 21 && $aces > 0) {
            $score -= 10; // Change Ace from 11 to 1
            $aces--;
        }
        
        return $score;
    }
}