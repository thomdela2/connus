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
        <a class="add-btn" href="{{route('addblogs')}}">Add</a>
        <div class="blog-container">
            @foreach ($blogs as $blog)
            <div class="blog">
                <h1>{{ $blog->title }}</h1>
                <h2>{{ $blog->content }}</2>
                <div class="blog-btn">
                    <a class="btn" href="{{route('editblogs', $blog->id)}}">Edit</a>
                    <a class="btn" href="{{route('deleteblogs', $blog->id)}}">Delete</a>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>
