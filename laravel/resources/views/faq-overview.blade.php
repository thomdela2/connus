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
            <div class="blog">
                <h1>Want to try it out?</h1>
                <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet repellat sed fugit quibusdam qui unde neque iure commodi nihil nobis animi, dolore, incidunt cupiditate inventore numquam maxime quod porro. Adipisci.Fugit eos, sunt harum delectus saepe perspiciatis quae.</2>
                <div class="faq-btn">
                    <a class="btn" href="{{route('editfaq')}}">Edit</a>
                    <a class="btn">Delete</a>
                </div>
            </div>
        </div>
    </body>
</html>
