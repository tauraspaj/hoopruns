<!doctype html>
<html>
<head>
    <title>{{ $title }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Fontawesome icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
