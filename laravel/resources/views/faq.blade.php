<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="blog-container">

            @foreach ($faqs as $faq)

            <div class="blog">
                <h1>{{ $faq->question }}</h1>
                <h2>{{ $faq->answer }}</2>
            </div>

            @endforeach

        </div>
    </body>
</html>
