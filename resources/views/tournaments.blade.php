<x-layout>
    <x-slot name="title">Tournaments | Surrey Basketball</x-slot>

    {{-- Latest scores --}}
    <x-slot name="latestScoresVisibility"></x-slot>

    <x-slot name="content">

        {{-- Container wrapper --}}
        <div class="bg-black bg-gradient-to-tr from-black to-[#120303]/90 py-12">
            <div class="container space-y-6">
                {{-- Page title --}}
                <h1 class="font-bebas text-3xl md:text-4xl tracking-wide inline-block py-2 px-4 bg-red-600">Tournaments</h1>

                {{-- Section of upcoming tournaments --}}
                <section>
                    {{-- Title --}}
                    <div>
                        <p class="font-bebas text-2xl md:text-3xl">Upcoming</p>
                        <div class="h-0.5 w-20 bg-red-600"></div>
                    </div>

                    {{-- List of upcoming tournaments --}}
                    <div class="flex flex-col mt-6 space-y-4">
                        <x-tournaments.list-upcoming></x-tournaments.list-upcoming>
                    </div>
                </section>

                {{-- Section of completed tournaments --}}
                <section>
                    {{-- Title --}}
                    <div>
                        <p class="font-bebas text-2xl md:text-3xl">Completed</p>
                        <div class="h-0.5 w-20 bg-red-600"></div>
                    </div>

                    {{-- List of completed tournaments --}}
                    <div class="flex flex-col mt-6 space-y-4">
                        <x-tournaments.list-completed></x-tournaments.list-completed>
                    </div>
                </section>
                
            </div>
        </div>

    </x-slot>
</x-layout>
