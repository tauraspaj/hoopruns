<x-layout>
    <x-slot name="title">Custom title</x-slot>

    {{-- Latest scores --}}
    <x-slot name="latestScoresVisibility"></x-slot>

    <x-slot name="content">
        {{-- Hero banner --}}
        <x-index.hero-banner></x-index.hero-banner>

        {{-- Upcoming tournaments --}}
        <x-index.upcoming-tournaments></x-index.upcoming-tournaments>

        {{-- Statistics --}}
        <x-index.statistics></x-index.statistics>

    </x-slot>
</x-layout>
