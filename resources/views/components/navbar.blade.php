<nav class="h-16 border-b border-gray-300 bg-gray-100 fixed w-full top-0 z-10 flex items-center">
    {{-- Container wrapper --}}
    <div class="container flex justify-between">
        {{-- Logo --}}
        <a href="/" class="h-12 w-12 flex items-center space-x-2 transition hover:scale-105" title="Go to Home Page">
            <img src="{{ asset('images/logo-test3.png') }}" alt="">
            <h1 class="text-gray-800 font-oswald font-medium tracking-widest whitespace-nowrap">HOOP <span class="text-sky-500">RUNS</span></h1>
        </a>

        {{-- Navbar --}}
        <div class="text-gray-800 flex space-x-16 font-oswald uppercase items-center font-medium">
            <a href="" class="text-sky-500">Home</a>
            <a href="" class="transition hover:text-sky-700">Tournaments</a>
            <a href="" class="transition hover:text-sky-700">News</a>
            <a href="" class="transition hover:text-sky-700">Register</a>
        </div>
    </div>
</nav>
