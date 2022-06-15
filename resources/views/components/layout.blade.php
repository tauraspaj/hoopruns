<!doctype html>
<html>
<head>
    <title>{{ $title }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="font-barlow bg-gray-100 text-gray-900">

    <div class="sticky top-0 shadow">

        {{-- Latest scores from latest-scores.blade.php component --}}
        {{-- $latestScoresVisibility can be set to hidden to hide it if needed --}}
        <x-latest-scores latestScoresVisibility="{{ $latestScoresVisibility }}"></x-latest-scores>
        
        {{-- Display navbar --}}
        <x-navbar></x-navbar>
    </div>

    {{ $content }}

</body>
</html>
