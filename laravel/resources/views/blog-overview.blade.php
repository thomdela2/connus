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
        <a class="add-btn" href="{{route('editblogs')}}">Add</a>
        <div class="blog-container">
            <div class="blog">
                <h1>Lets try it out</h1>
                <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet repellat sed fugit quibusdam qui unde neque iure commodi nihil nobis animi, dolore, incidunt cupiditate inventore numquam maxime quod porro. Adipisci.Fugit eos, sunt harum delectus saepe perspiciatis quae. Modi molestias tempora et ex, repudiandae dolor esse, unde facilis quibusdam aut provident, exercitationem eum! Eligendi vitae amet, magnam necessitatibus quis debitis.</2>
                <div class="blog-btn">
                    <a class="btn" href="{{route('editblogs')}}">Edit</a>
                    <a class="btn">Delete</a>
                </div>
            </div>
        </div>
    </body>
</html>
