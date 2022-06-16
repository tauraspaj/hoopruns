<x-layout>
    <x-slot name="title">Custom title</x-slot>

    {{-- Latest scores --}}
    <x-slot name="latestScoresVisibility"></x-slot>

    <x-slot name="content">
        <div class="h-[80vh] md:h-[75vh] overflow-hidden relative">
            <!-- Bg image -->
            <img src="{{ asset('images/hero.jpg') }}" class="w-full h-full object-cover object-center absolute z-[-2]" alt="">
            <!-- Dark overlay -->
            <div class="w-full h-full bg-gradient-to-r from-black via-black/90 to-[#550E0E]/70 absolute z-[-1]"></div>

            <!-- Title -->
            <div class="w-full h-full container px-4 mx-auto flex flex-col justify-between pt-24 pb-16">
                <div class="md:w-3/4 lg:w-2/3">
                    <h1 class="text-center md:text-left text-gray-50 font-barlow font-bold text-3xl md:text-5xl xl:text-7xl tracking-wide uppercase">THE <span class="text-red-600 xl:[-webkit-text-fill-color:transparent] xl:[-webkit-text-stroke-width:2px]">BEST</span> BASKETBALL EVENTS IN SURREY</h1>
                    <div class="md:w-5/6 mt-4">
                        <p class="text-gray-400 md:text-lg text-center md:text-left">We organise professional basketball events for all levels of players. Get in touch now to register your interest!</p>
                    </div>
                    <div class="mt-8 space-x-6 flex justify-center md:justify-start">
                        <a href="/register" class="text-gray-50 text-xs sm:text-sm lg:text-base bg-red-600 transition hover:bg-red-800 rounded py-2 px-4 font-semibold tracking-wide" title="Register">REGISTER</a>
                        <a href="/tournaments" class="text-gray-50 text-xs sm:text-sm lg:text-base bg-transparent border border-red-600 transition hover:bg-red-800 hover:border-red-800 rounded py-2 px-4 font-semibold tracking-wide" title="Tournaments">TOURNAMENTS</a>
                    </div>
                </div>
                
                <div class="flex justify-center md:justify-between items-center">
                    <div class="flex space-x-8 items-center md:space-x-12 lg:space-x-24">
                        <div class="flex items-center justify-center space-x-4">
                            <svg class="w-4 h-4 md:w-6 md:h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                            <p class="font-roboto font-medium md:font-bold text-gray-50 text-sm md:text-xl">PROFESSIONAL<br> REFEREES</p>
                        </div>
                        <div class="items-center justify-center space-x-4 hidden md:flex">
                            <svg class="w-4 h-4 md:w-6 md:h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            <p class="font-roboto font-medium md:font-bold text-gray-50 text-sm md:text-xl">ORGANISED<br> SCHEDULE</p>
                        </div>
                        <div class="flex items-center justify-center space-x-4">
                            <svg class="w-4 h-4 md:w-6 md:h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                            <p class="font-roboto font-medium md:font-bold text-gray-50 text-sm md:text-xl">COMPETITIVE<br> ENVIRONMENT</p>
                        </div>
                    </div>
                    <div class="hidden md:block lg:mr-6 animate-bounce">
                        <svg class="w-8 h-8 text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </div>
                </div>
                
            </div>
        </div>
    </x-slot>
</x-layout>
