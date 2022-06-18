
<section class="bg-gray-200 text-gray-900 hidden sm:block {{$latestScoresVisibility}}">
    {{-- Container wrapper --}}
    <div class="flex items-center container h-full overflow-x-auto">
        {{-- Tournament select --}}
        <div class="flex-none border-r border-gray-300 h-full flex items-center">
            <button class="border rounded-full bg-gray-50 px-4 py-1 flex items-center space-x-2 transition hover:bg-white">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                <p class="font-semibold text-sm uppercase">World Cup Champ</p>
            </button>
        </div>

        {{-- Scores --}}
        <div class="flex-none flex bg-white flex-col px-4 h-full text-xs uppercase font-bold border-r border-gray-300 py-1">
            <p class="mb-1 font-bold text-[0.6rem] underline">Finals</p>
            <div class="flex justify-between items-center space-x-8">
                <p>Senpais</p>
                <p>101</p>
            </div>
            <div class="flex justify-between items-center text-gray-400 space-x-8 font-semibold">
                <p>Scorers</p>
                <p>97</p>
            </div>
        </div>
        
    </div>
</section>
