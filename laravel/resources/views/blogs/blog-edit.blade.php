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
            <form class="blog" action="{{ route('saveblog') }}" method="post">
                @csrf
            <input type="text" value="{{ old('title', ($blog ? $blog->title : '')) }}" name="title" id="input-title">
                <textarea value="{{old('content', ($blog ? $blog->content : ''))}} " name="content" id="input-content" cols="30" rows="10" id="input-content"></textarea>
                <button class="btn" type="submit">
                    @if(!$blog)
                    Add
                    @else
                    Edit
                    @endif
                </button>
            </form>
        </div>
    </body>
</html>

{{-- @TODO -> $blog dumpen geeft lege array --}}
