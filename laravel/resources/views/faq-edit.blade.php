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
        <a class="add-btn" href="{{route('overviewfaq')}}">return</a>
        <div class="faq-container">
        <form class="faq" action="{{ route('savefaq') }}" method="post">
                @csrf
                <input type="text" name="question" id="input-question" placeholder="Vraag">
                <textarea placeholder="Antwoord" name="answer" id="input-answer" cols="30" rows="10" id="input-answer"></textarea>
                <button class="btn" type="submit">Add</button>
            </form>
        </div>
    </body>
</html>
