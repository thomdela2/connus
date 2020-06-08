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
                <input type="text" name="title" id="input-title" placeholder="Titel">
                <textarea placeholder="Inhoud" name="content" id="input-content" cols="30" rows="10" id="input-content"></textarea>
                <button class="btn" type="submit">Add</button>
            </form>

            {{-- Not working --}}
            <div class="errors">
                @if($errors->any())
                <div class="callout error">
                    <ul>
                        @foreach($errors as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

        </div>
    </body>
</html>
