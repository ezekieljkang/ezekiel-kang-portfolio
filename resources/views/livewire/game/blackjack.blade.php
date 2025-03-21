<div class="blackjack-game">
    <div class="flex justify-center space-x-8 mb-4">
        <div>
            <h3 class="text-xl font-bold">Dealer: {{ $dealerTurn ? $dealerScore : '?' }}</h3>
            <div class="flex gap-2 mt-2">
                @foreach($dealerHand as $index => $card)
                    <div class="card bg-white text-black w-16 h-24 rounded shadow-md flex items-center justify-center {{ $index === 1 && !$dealerTurn ? 'bg-gray-300' : '' }}">
                        @if($index === 1 && !$dealerTurn)
                            <span class="text-2xl">?</span>
                        @else
                            <div class="flex flex-col items-center">
                                <span class="text-xl font-bold {{ in_array($card['suit'], ['hearts', 'diamonds']) ? 'text-red-600' : 'text-black' }}">{{ $card['value'] }}</span>
                                <span class="{{ in_array($card['suit'], ['hearts', 'diamonds']) ? 'text-red-600' : 'text-black' }}">
                                    @if($card['suit'] === 'hearts') ♥
                                    @elseif($card['suit'] === 'diamonds') ♦
                                    @elseif($card['suit'] === 'clubs') ♣
                                    @else ♠
                                    @endif
                                </span>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        
        <div>
            <h3 class="text-xl font-bold">Player: {{ $playerScore }}</h3>
            <div class="flex gap-2 mt-2">
                @foreach($playerHand as $card)
                    <div class="card bg-white text-black w-16 h-24 rounded shadow-md flex items-center justify-center">
                        <div class="flex flex-col items-center">
                            <span class="text-xl font-bold {{ in_array($card['suit'], ['hearts', 'diamonds']) ? 'text-red-600' : 'text-black' }}">{{ $card['value'] }}</span>
                            <span class="{{ in_array($card['suit'], ['hearts', 'diamonds']) ? 'text-red-600' : 'text-black' }}">
                                @if($card['suit'] === 'hearts') ♥
                                @elseif($card['suit'] === 'diamonds') ♦
                                @elseif($card['suit'] === 'clubs') ♣
                                @else ♠
                                @endif
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="mb-4 p-4 bg-opacity-50 rounded {{ 
        $gameStatus === 'playerWin' || $gameStatus === 'dealerBust' ? 'bg-green-500' : 
        ($gameStatus === 'dealerWin' || $gameStatus === 'playerBust' ? 'bg-red-500' : 
        ($gameStatus === 'push' ? 'bg-yellow-500' : 'bg-gray-500')) 
    }}">
        <p class="text-xl font-bold">{{ $message }}</p>
    </div>
    
    <div class="flex justify-center gap-4">
        <button wire:click="deal" class="btn btn-primary min-w-24">Deal</button>
        <button wire:click="hit" class="btn btn-secondary min-w-24" {{ $gameStatus !== 'playing' || $dealerTurn ? 'disabled' : '' }}>Hit</button>
        <button wire:click="stand" class="btn btn-accent min-w-24" {{ $gameStatus !== 'playing' || $dealerTurn ? 'disabled' : '' }}>Stand</button>
    </div>
</div>