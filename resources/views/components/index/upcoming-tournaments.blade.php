<section class="bg-black bg-gradient-to-tr from-black to-[#120303]/90 py-12">
    {{-- Title --}}
    <div class="container pb-12">
        <p class="font-bebas text-3xl md:text-4xl">Upcoming Tournaments</p>
        <div class="h-0.5 w-40 bg-red-600"></div>
    </div>

    {{-- Upcoming tournaments --}}
    <div class="container flex flex-col md:flex-row space-y-12 md:space-y-0 md:space-x-12">
        {{-- Next single tournament --}}
        <div class="flex-1 overflow-hidden">
            <a href="/tournaments" class="h-40 md:h-[26rem] w-full bg-cover bg-center relative flex flex-col justify-end cursor-pointer transition hover:scale-[1.05]" style="background-image: url('{{ asset('images/tourney-bg.jpg') }}'">
                <div class="inset-0 absolute bg-gradient-to-t from-black/90 via-black/80 to-black/40"></div>

                {{-- Text --}}
                <div class="text-gray-50 z-[1] space-y-2 md:space-y-4 p-2 md:p-6">
                    <p class="text-2xl lg:text-4xl font-semibold whitespace-nowrap truncate">World Cup Championshipasdoiuasidu</p>
                    <div class="flex space-x-2">
                        <div class="bg-green-700/80 rounded-full px-2 md:px-3 py-0.5 md:py-1 md:text-sm flex items-center space-x-1">
                            <svg class="hidden md:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="font-semibold uppercase text-xs whitespace-nowrap">23 July 2022</p>
                        </div>

                        <div class="bg-green-700/80 rounded-full px-2 md:px-3 py-0.5 md:py-1 md:text-sm flex items-center space-x-1">
                            <svg class="hidden md:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <p class="font-semibold uppercase text-xs whitespace-nowrap">7/8 Teams</p>
                        </div>

                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <p class="font-medium uppercase text-xs md:text-sm whitespace-nowrap truncate">Guildford, SSP</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        {{-- Next 2 tournaments in column layout --}}
        <div class="h-96 md:h-auto flex-1 flex flex-col space-y-12 overflow-hidden">
            <a href="/tournaments" class="md:flex-1 h-40 bg-cover bg-center relative flex flex-col justify-end cursor-pointer transition hover:scale-[1.05]" style="background-image: url('{{ asset('images/tourney-bg.jpg') }}'">
                <div class="inset-0 absolute bg-gradient-to-t from-black/90 via-black/80 to-black/40"></div>

                {{-- Text --}}
                <div class="text-gray-50 z-[1] space-y-2 md:space-y-4 p-2 md:p-6">
                    <p class="text-2xl lg:text-4xl font-semibold whitespace-nowrap truncate">World Cup Championshipasdoiuasidu</p>
                    <div class="flex space-x-2">
                        <div class="bg-green-700/80 rounded-full px-2 md:px-3 py-0.5 md:py-1 md:text-sm flex items-center space-x-1">
                            <svg class="hidden md:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="font-semibold uppercase text-xs whitespace-nowrap">23 July 2022</p>
                        </div>

                        <div class="bg-green-700/80 rounded-full px-2 md:px-3 py-0.5 md:py-1 md:text-sm flex items-center space-x-1">
                            <svg class="hidden md:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <p class="font-semibold uppercase text-xs whitespace-nowrap">7/8 Teams</p>
                        </div>

                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <p class="font-medium uppercase text-xs md:text-sm whitespace-nowrap truncate">Guildford, SSP</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/tournaments" class="hidden md:flex md:flex-1 h-40 bg-cover bg-center relative flex flex-col justify-end cursor-pointer transition hover:scale-[1.05]" style="background-image: url('{{ asset('images/tourney-bg.jpg') }}'">
                <div class="inset-0 absolute bg-gradient-to-t from-black/90 via-black/80 to-black/40"></div>

                {{-- Text --}}
                <div class="text-gray-50 z-[1] space-y-2 md:space-y-4 p-2 md:p-6">
                    <p class="text-2xl lg:text-4xl font-semibold whitespace-nowrap truncate">World Cup Championshipasdoiuasidu</p>
                    <div class="flex space-x-2">
                        <div class="bg-green-700/80 rounded-full px-2 md:px-3 py-0.5 md:py-1 md:text-sm flex items-center space-x-1">
                            <svg class="hidden md:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="font-semibold uppercase text-xs whitespace-nowrap">23 July 2022</p>
                        </div>

                        <div class="bg-green-700/80 rounded-full px-2 md:px-3 py-0.5 md:py-1 md:text-sm flex items-center space-x-1">
                            <svg class="hidden md:block w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <p class="font-semibold uppercase text-xs whitespace-nowrap">7/8 Teams</p>
                        </div>

                        <div class="flex items-center space-x-1">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <p class="font-medium uppercase text-xs md:text-sm whitespace-nowrap truncate">Guildford, SSP</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="container pt-12 flex justify-center items-center">
        <a href="/tournaments" class="uppercase text-red-600 transition hover:text-red-800 font-semibold text-sm flex item-center justify-center space-x-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            <p>See all tournaments</p>
        </a>
    </div>
</section>
