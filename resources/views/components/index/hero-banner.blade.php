<section class="h-screen relative">
    {{-- Floating text behind the images --}}
    <div class="inset-0 absolute flex justify-center items-center overflow-hidden z-[-1]">
        <p class="text-gray-50 font-oswald text-center font-bold text-[15vw] whitespace-nowrap leading-[1.1] tracking-wide">RUNS<br>FOR HOOPERS</p>
    </div>

    {{-- Floating images --}}
    <div class="flex absolute -bottom-28 right-20">
        {{-- Floating Kobe image --}}
        <div class="mt-20 -mr-60">
            <img src="{{ asset('images/kobe.png') }}" alt="Floating Kobe">
        </div>
    
        {{-- Floating Lebron image --}}
        <div class="scale-90">
            <img src="{{ asset('images/lebron.png') }}" alt="Floating Lebron">
        </div>
    </div>

    {{-- Floating patterns --}}
    <div class="absolute scale-50 -left-[32rem] -bottom-32 z-[-1] opacity-20">
        {{-- Floating pattern image --}}
        <img src="{{ asset('images/dot.png') }}" class="scale-75">
    </div>
    <div class="absolute scale-50 -right-32 -bottom-64 z-[-1] opacity-20">
        {{-- Floating pattern image --}}
        <img src="{{ asset('images/dot.png') }}" class="scale-75">
    </div>

    {{-- Text --}}
    <div class="h-full flex items-center">
        <div class="container">
            <p class="text-xs tracking-widest uppercase text-gray-900 opacity-40 font-medium">For Hoopers By Hoopers</p>
            <h1 class="font-oswald text-gray-900 font-bold tracking-wide text-8xl -ml-1">FIND A RUN</h1>

            <h2 class="text-gray-500 mt-6 text-lg">We organise professional basketball events for all levels of players.</h2>
            <p class="text-gray-500 text-lg">Get in touch now to register your interest!</p>

            {{-- Call to action buttons --}}
            <div class="flex space-x-6 mt-12">
                <button class="uppercase bg-gray-800 py-3 px-8 text-gray-50 font-oswald font-medium transition hover:bg-gray-900" title="Go to Tournaments">TOURNAMENTS</button>
                <button class="uppercase border-2 border-gray-300 text-gray-900 py-3 px-8 font-oswald font-medium transition hover:border-gray-900" title="Go to Contacts Page">CONTACT US</button>
            </div>
        </div>
    </div>


</section>

