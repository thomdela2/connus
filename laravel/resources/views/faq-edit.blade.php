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
            <div class="faq">
                <input type="text" name="title" id="input-title" placeholder="Vraag">
                <textarea name="content" id="" cols="30" rows="10" id="input-content">Antwoord</textarea>
                <div class="edit-btn">
                    <a class="btn" href="{{route('overviewfaq')}}">Add</a>
                </div>
            </div>
        </div>
    </body>
</html>
