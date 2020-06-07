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
        <a class="add-btn" href="{{route('overviewblogs')}}">return</a>
        <div class="blog-container">
            <div class="blog">
                <input type="text" name="title" id="input-title" placeholder="Titel">
                <textarea name="content" id="" cols="30" rows="10" id="input-content">Inhoud</textarea>
                <div class="edit-btn">
                    <a class="btn" href="{{route('overviewblogs')}}">Add</a>
                </div>
            </div>
        </div>
    </body>
</html>
