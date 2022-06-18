<x-layout>
    <x-slot name="title">Custom title</x-slot>

    {{-- Latest scores --}}
    <x-slot name="latestScoresVisibility"></x-slot>

    <x-slot name="content">
        {{-- Hero banner --}}
        <div class="h-[80vh] md:h-[75vh] overflow-hidden relative">
                <x-hero-banner></x-hero-banner>
        </div>

        {{-- Upcoming tournaments --}}
        <section class="h-96 bg-black bg-gradient-to-tr from-black to-[#120303]/90">
            <x-upcoming-tournaments></x-upcoming-tournaments>
        </section>
    </x-slot>
</x-layout>
