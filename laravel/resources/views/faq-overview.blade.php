<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <header>
            <h1>Header</h1>
        </header>
        <a class="add-btn" href="{{route('editfaq')}}">Add</a>
        <div class="faq-container">
            @foreach ($faqs as $faq)

            <div class="blog">
                <h1>{{$faq->question}}</h1>
                <h2>{{$faq->answer}}</2>
                <div class="faq-btn">
                    <a class="btn" href="{{route('editfaq')}}">Edit</a>
                    <a class="btn">Delete</a>
                </div>
            </div>

            @endforeach
        </div>
    </body>
</html>
