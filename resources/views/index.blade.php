<x-layout>
    <x-slot name="title">Custom title</x-slot>

    {{-- Latest scores --}}
    <x-slot name="latestScoresVisibility"></x-slot>

    <x-slot name="content">
        {{-- Hero banner --}}
        <x-hero-banner></x-hero-banner>

        {{-- Upcoming tournaments --}}
        <x-upcoming-tournaments></x-upcoming-tournaments>

    </x-slot>
</x-layout>
