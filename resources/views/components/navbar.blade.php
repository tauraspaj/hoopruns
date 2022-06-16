<nav class="h-12 bg-neutral-900">
    {{-- Container wrapper --}}
    <div class="container h-full mx-auto flex justify-between items-center text-gray-50">
        {{-- Logo --}}
        <div class="flex items-center space-x-2 px-2">
            <i class="fa-solid fa-basketball text-red-600"></i>
            <p class="font-bebas text-lg pt-1 tracking-wider">SURREY BASKETBALL</p>
        </div>

        {{-- Hamburger --}}
        <button class="mx-2 md:hidden w-8 h-8 border rounded border-gray-400 p-1 flex flex-col justify-center items-center space-y-1 transition hover:border-orange-600 hover:text-orange-600">
            {{--  --}}
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>

        {{-- Links --}}
        <div class="hidden md:flex md:space-x-16 lg:space-x-20 items-center">
            <a href="/" class="font-bebas text-lg tracking-wide text-red-600 transition hover:text-red-600" title="Home">Home</a>
            <a href="/tournaments" class="font-bebas text-lg tracking-wide transition hover:text-red-600" title="Tournaments">Tournaments</a>
            <a href="/news" class="font-bebas text-lg tracking-wide transition hover:text-red-600" title="News">News</a>
            <a href="/register" class="font-bebas text-lg tracking-wide transition hover:text-red-600 ring-1 rounded ring-red-600 px-2" title="Register">Register</a>
        </div>
    </div>

    {{-- Mobile dropdown --}}
    <div class="md:hidden">
        <div class="bg-neutral-800 shadow text-gray-50 py-6">
            <div class="flex flex-col justify-center items-center space-y-6">
                <a href="/" class="font-bebas text-lg tracking-wide text-red-600 transition hover:text-red-600" title="Home">Home</a>
                <a href="/tournaments" class="font-bebas text-lg tracking-wide transition hover:text-red-600" title="Tournaments">Tournaments</a>
                <a href="/news" class="font-bebas text-lg tracking-wide transition hover:text-red-600" title="News">News</a>
                <a href="/register" class="font-bebas text-lg tracking-wide transition hover:text-red-600 ring-1 rounded ring-red-600 px-2" title="Register">Register</a>
            </div>

            <div class="flex flex-col justify-center items-center pt-12 pb-8 space-y-4">
                <p class="text-xs pt-10 uppercase tracking-widest">Find us</p>
                <div class="text-gray-300 space-x-4">
                    <a href="/"><i class="fa-brands fa-instagram border p-2 border-neutral-600 rounded transition hover:border-red-600 hover:text-red-600"></i></a>
                    <a href="/"><i class="fa-brands fa-twitter border p-2 border-neutral-600 rounded transition hover:border-red-600 hover:text-red-600"></i></a>
                </div>
            </div>
        </div>
        <div class="h-screen w-screen bg-black absolute bg-opacity-70"></div>
    </div>
</nav>
