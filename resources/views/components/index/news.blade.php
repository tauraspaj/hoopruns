<section class="container py-12 text-gray-900">
    {{-- Title --}}
    <div class="pb-12">
        <p class="font-bebas text-3xl md:text-4xl">News & Latest Results</p>
        <div class="h-0.5 w-40 bg-red-600"></div>
    </div>

    {{-- News cards --}}
    <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-16">
        {{-- Card --}}
        <a href="/tournaments" class="md:flex-1 h-96 bg-white overflow-hidden rounded-xl flex flex-col transition group">
            <div class="flex-none w-full h-3/5 bg-cover bg-center transition group-hover:opacity-70 relative" style="background-image: url('{{ asset('images/news-placeholder.jpg') }}')">
                <div class="h-6 w-6 bg-gray-100 rounded-full absolute z-[1] -bottom-3 -left-3"></div>
                <div class="h-6 w-6 bg-gray-100 rounded-full absolute z-[1] -bottom-3 -right-3"></div>
            </div>
            <div class="flex-auto p-2">
                <h1 class="font-bold text-xl">Team USA win first world cup!</h1>
                <div class="flex items-center space-x-1 pt-1 pb-4 text-gray-500">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class="text-xs font-semibold">24 July 2021</p>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam non libero necessitatibus voluptas minima fugiat.</p>
            </div>
        </a>
        {{-- Card --}}
        <a href="/tournaments" class="md:flex-1 h-96 bg-white overflow-hidden rounded-xl flex flex-col transition group">
            <div class="flex-none w-full h-3/5 bg-cover bg-center transition group-hover:opacity-70 relative" style="background-image: url('{{ asset('images/news-placeholder.jpg') }}')">
                <div class="h-6 w-6 bg-gray-100 rounded-full absolute z-[1] -bottom-3 -left-3"></div>
                <div class="h-6 w-6 bg-gray-100 rounded-full absolute z-[1] -bottom-3 -right-3"></div>
            </div>
            <div class="flex-auto p-2">
                <h1 class="font-bold text-xl">Team USA win first world cup!</h1>
                <div class="flex items-center space-x-1 pt-1 pb-4 text-gray-500">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class="text-xs font-semibold">24 July 2021</p>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore harum aliquid explicabo, iste inventore officiis error. Ullam tempore iure repudiandae corporis.</p>
            </div>
        </a>
        {{-- Card --}}
        <a href="/tournaments" class="md:flex-1 h-96 bg-white overflow-hidden rounded-xl flex flex-col transition group">
            <div class="flex-none w-full h-3/5 bg-cover bg-center transition group-hover:opacity-70 relative" style="background-image: url('{{ asset('images/news-placeholder.jpg') }}')">
                <div class="h-6 w-6 bg-gray-100 rounded-full absolute z-[1] -bottom-3 -left-3"></div>
                <div class="h-6 w-6 bg-gray-100 rounded-full absolute z-[1] -bottom-3 -right-3"></div>
            </div>
            <div class="flex-auto p-2">
                <h1 class="font-bold text-xl">Team USA win first world cup!</h1>
                <div class="flex items-center space-x-1 pt-1 pb-4 text-gray-500">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <p class="text-xs font-semibold">24 July 2021</p>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam non libero necessitatibus voluptas minima fugiat.</p>
            </div>
        </a>
    </div>

    <div class="container pt-12 flex justify-center items-center">
        <a href="/news" class="uppercase text-gray-600 transition hover:text-gray-800 font-semibold text-sm flex item-center justify-center space-x-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            <p>See latest news</p>
        </a>
    </div>
</section>
