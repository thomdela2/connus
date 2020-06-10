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

                @if($faq)
                <input type="hidden" name="id" value="{{ $faq->id }}">
                    @endif

                <input type="text" name="question" id="input-question" value="{{ old('question', ($faq ? $faq->question : 'Vraag')) }}">
                <textarea placeholder="" name="answer" id="input-answer" cols="30" rows="10" id="input-answer">{{ old('answer', ($faq ? $faq->answer : 'Antwoord')) }}</textarea>
                <button class="btn" type="submit">
                    @if(!$faq)
                    Add
                    @else
                    Edit
                    @endif
                </button>
            </form>
        </div>
    </body>
</html>