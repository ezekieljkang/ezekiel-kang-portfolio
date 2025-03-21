// Copies email address
function copyEmail() {
  const email = "ezekieljkang@gmail.com";
  navigator.clipboard.writeText(email).then(() => {
      alert("Email copied to clipboard!");
  });
}

// Scroll Animation to projects
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("viewWorkBtn").addEventListener("click", function () {
      document.getElementById("projects").scrollIntoView({ behavior: "smooth" });
  });
});

// Open Project Modal on click
function openModal(modalName) {
  Livewire.emit('openModal', modalName);
}

// Attach click event listeners to each image to open the respective modal
document.querySelectorAll('.project-image').forEach(image => {
  image.addEventListener('click', function() {
    const modalId = image.getAttribute('data-modal');
    document.getElementById(modalId).showModal();
  });
});

// app.js - Blackjack game 

// If you're not using Livewire, you can use this vanilla JS implementation
// This implements the same functionality without using Laravel/Livewire

document.addEventListener('DOMContentLoaded', () => {
  // Only initialize if the blackjack container exists
  const blackjackContainer = document.getElementById('blackjack');
  if (!blackjackContainer) return;

  // Game state
  const game = {
      deck: [],
      playerHand: [],
      dealerHand: [],
      playerScore: 0,
      dealerScore: 0,
      gameStatus: 'waiting', // waiting, playing, playerBust, dealerBust, playerWin, dealerWin, push
      message: 'Press Deal to start a new game',
      dealerTurn: false,
      
      // DOM elements
      elements: {
          dealerCards: null,
          playerCards: null,
          dealerScore: null,
          playerScore: null,
          message: null,
          dealButton: null,
          hitButton: null,
          standButton: null
      },
      
      // Initialize the game
      init() {
          // Find all DOM elements
          this.elements.dealerCards = blackjackContainer.querySelector('.dealer-cards');
          this.elements.playerCards = blackjackContainer.querySelector('.player-cards');
          this.elements.dealerScore = blackjackContainer.querySelector('.dealer-score');
          this.elements.playerScore = blackjackContainer.querySelector('.player-score');
          this.elements.message = blackjackContainer.querySelector('.game-message');
          this.elements.dealButton = blackjackContainer.querySelector('.deal-button');
          this.elements.hitButton = blackjackContainer.querySelector('.hit-button');
          this.elements.standButton = blackjackContainer.querySelector('.stand-button');
          
          // Add event listeners
          this.elements.dealButton.addEventListener('click', () => this.deal());
          this.elements.hitButton.addEventListener('click', () => this.hit());
          this.elements.standButton.addEventListener('click', () => this.stand());
          
          // Initialize deck
          this.initializeDeck();
          
          // Initial render
          this.render();
      },
      
      // Initialize a new deck of cards
      initializeDeck() {
          this.deck = [];
          const suits = ['hearts', 'diamonds', 'clubs', 'spades'];
          const values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];
          
          suits.forEach(suit => {
              values.forEach(value => {
                  this.deck.push({
                      suit,
                      value,
                      numericValue: this.getCardValue(value)
                  });
              });
          });
          
          // Shuffle the deck
          this.shuffleDeck();
      },
      
      // Shuffle the deck
      shuffleDeck() {
          for (let i = this.deck.length - 1; i > 0; i--) {
              const j = Math.floor(Math.random() * (i + 1));
              [this.deck[i], this.deck[j]] = [this.deck[j], this.deck[i]];
          }
      },
      
      // Get numeric value of a card
      getCardValue(value) {
          if (['J', 'Q', 'K'].includes(value)) {
              return 10;
          } else if (value === 'A') {
              return 11; // Ace initially counts as 11
          } else {
              return parseInt(value);
          }
      },
      
      // Draw a card from the deck
      drawCard() {
          if (this.deck.length === 0) {
              this.initializeDeck();
          }
          return this.deck.pop();
      },
      
      // Deal new cards and start a new game
      deal() {
          this.resetGame();
          
          // Deal 2 cards to player and dealer
          this.playerHand.push(this.drawCard());
          this.dealerHand.push(this.drawCard());
          this.playerHand.push(this.drawCard());
          this.dealerHand.push(this.drawCard());
          
          this.calculateScores();
          
          // Check for blackjack
          if (this.playerScore === 21 && this.dealerScore === 21) {
              this.gameStatus = 'push';
              this.message = 'Both have Blackjack! Push.';
              this.dealerTurn = true;
          } else if (this.playerScore === 21) {
              this.gameStatus = 'playerWin';
              this.message = 'Blackjack! You win!';
              this.dealerTurn = true;
          } else if (this.dealerScore === 21) {
              this.gameStatus = 'dealerWin';
              this.message = 'Dealer has Blackjack! You lose.';
              this.dealerTurn = true;
          } else {
              this.gameStatus = 'playing';
              this.message = 'Your turn - Hit or Stand?';
          }
          
          this.render();
          this.updateButtonStates();
      },
      
      // Reset the game state
      resetGame() {
          if (this.deck.length < 15) {
              this.initializeDeck();
          }
          
          this.playerHand = [];
          this.dealerHand = [];
          this.playerScore = 0;
          this.dealerScore = 0;
          this.gameStatus = 'playing';
          this.message = 'Your turn - Hit or Stand?';
          this.dealerTurn = false;
      },
      
      // Player takes another card
      hit() {
          if (this.gameStatus !== 'playing' || this.dealerTurn) {
              return;
          }
          
          this.playerHand.push(this.drawCard());
          this.calculateScores();
          
          if (this.playerScore > 21) {
              this.gameStatus = 'playerBust';
              this.message = 'Bust! You lose.';
              this.dealerTurn = true;
          } else if (this.playerScore === 21) {
              this.stand();
          }
          
          this.render();
          this.updateButtonStates();
      },
      
      // Player stands, dealer plays
      stand() {
          if (this.gameStatus !== 'playing') {
              return;
          }
          
          this.dealerTurn = true;
          this.dealerPlay();
          this.render();
          this.updateButtonStates();
      },
      
      // Dealer's turn
      dealerPlay() {
          this.calculateScores();
          
          // Dealer hits until score is 17 or higher
          while (this.dealerScore < 17) {
              this.dealerHand.push(this.drawCard());
              this.calculateScores();
          }
          
          // Determine winner
          if (this.dealerScore > 21) {
              this.gameStatus = 'dealerBust';
              this.message = 'Dealer busts! You win!';
          } else if (this.dealerScore > this.playerScore) {
              this.gameStatus = 'dealerWin';
              this.message = `Dealer wins with ${this.dealerScore} vs your ${this.playerScore}.`;
          } else if (this.dealerScore < this.playerScore) {
              this.gameStatus = 'playerWin';
              this.message = `You win with ${this.playerScore} vs dealer's ${this.dealerScore}!`;
          } else {
              this.gameStatus = 'push';
              this.message = `Push! Both have ${this.playerScore}.`;
          }
      },
      
      // Calculate hand scores
      calculateScores() {
          this.playerScore = this.calculateHandScore(this.playerHand);
          this.dealerScore = this.calculateHandScore(this.dealerHand);
      },
      
      // Calculate the score for a hand
      calculateHandScore(hand) {
          let score = 0;
          let aces = 0;
          
          hand.forEach(card => {
              score += card.numericValue;
              if (card.value === 'A') {
                  aces++;
              }
          });
          
          // Adjust for aces if bust
          while (score > 21 && aces > 0) {
              score -= 10; // Change Ace from 11 to 1
              aces--;
          }
          
          return score;
      },
      
      // Update UI button states
      updateButtonStates() {
          const disableActionButtons = this.gameStatus !== 'playing' || this.dealerTurn;
          this.elements.hitButton.disabled = disableActionButtons;
          this.elements.standButton.disabled = disableActionButtons;
          
          // Add visual disabled state to buttons 
          if (disableActionButtons) {
              this.elements.hitButton.classList.add('opacity-50', 'cursor-not-allowed');
              this.elements.standButton.classList.add('opacity-50', 'cursor-not-allowed');
          } else {
              this.elements.hitButton.classList.remove('opacity-50', 'cursor-not-allowed');
              this.elements.standButton.classList.remove('opacity-50', 'cursor-not-allowed');
          }
      },
      
      // Render the game state to the DOM
      render() {
          // Update scores
          this.elements.playerScore.textContent = `Player: ${this.playerScore}`;
          this.elements.dealerScore.textContent = this.dealerTurn 
              ? `Dealer: ${this.dealerScore}`
              : 'Dealer: ?';
          
          // Update message
          this.elements.message.textContent = this.message;
          
          // Update message background based on game status
          this.elements.message.className = 'game-message text-xl font-bold p-4 rounded';
          if (this.gameStatus === 'playerWin' || this.gameStatus === 'dealerBust') {
              this.elements.message.classList.add('bg-green-500', 'bg-opacity-50');
          } else if (this.gameStatus === 'dealerWin' || this.gameStatus === 'playerBust') {
              this.elements.message.classList.add('bg-red-500', 'bg-opacity-50');
          } else if (this.gameStatus === 'push') {
              this.elements.message.classList.add('bg-yellow-500', 'bg-opacity-50');
          } else {
              this.elements.message.classList.add('bg-gray-500', 'bg-opacity-50');
          }
          
          // Render player cards
          this.elements.playerCards.innerHTML = '';
          this.playerHand.forEach(card => {
              this.elements.playerCards.appendChild(this.createCardElement(card));
          });
          
          // Render dealer cards
          this.elements.dealerCards.innerHTML = '';
          this.dealerHand.forEach((card, index) => {
              if (index === 1 && !this.dealerTurn) {
                  // Show card back for dealer's second card when it's not dealer's turn
                  this.elements.dealerCards.appendChild(this.createCardBackElement());
              } else {
                  this.elements.dealerCards.appendChild(this.createCardElement(card));
              }
          });
      },
      
      // Create a card element
      createCardElement(card) {
          const cardElement = document.createElement('div');
          cardElement.className = 'card bg-white text-black w-16 h-24 rounded shadow-md flex items-center justify-center';
          
          const cardContent = document.createElement('div');
          cardContent.className = 'flex flex-col items-center';
          
          const valueSpan = document.createElement('span');
          valueSpan.className = 'text-xl font-bold';
          valueSpan.textContent = card.value;
          
          const suitSpan = document.createElement('span');
          
          // Set color and suit symbol
          if (['hearts', 'diamonds'].includes(card.suit)) {
              valueSpan.classList.add('text-red-600');
              suitSpan.classList.add('text-red-600');
          } else {
              valueSpan.classList.add('text-black');
              suitSpan.classList.add('text-black');
          }
          
          if (card.suit === 'hearts') {
              suitSpan.textContent = '♥';
          } else if (card.suit === 'diamonds') {
              suitSpan.textContent = '♦';
          } else if (card.suit === 'clubs') {
              suitSpan.textContent = '♣';
          } else {
              suitSpan.textContent = '♠';
          }
          
          cardContent.appendChild(valueSpan);
          cardContent.appendChild(suitSpan);
          cardElement.appendChild(cardContent);
          
          return cardElement;
      },
      
      // Create a card back element
      createCardBackElement() {
          const cardElement = document.createElement('div');
          cardElement.className = 'card bg-gray-300 text-black w-16 h-24 rounded shadow-md flex items-center justify-center';
          
          const questionMark = document.createElement('span');
          questionMark.className = 'text-2xl';
          questionMark.textContent = '?';
          
          cardElement.appendChild(questionMark);
          
          return cardElement;
      }
  };
  
  // Initialize the game
  createGameStructure();
  game.init();
});