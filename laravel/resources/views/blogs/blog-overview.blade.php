@extends('layouts.app')
        @section('content')
            <a class="add-btn" href="{{route('addblogs')}}">Add</a>
            <div class="faq-container">
                @foreach ($blogs as $blog)
                <div class="blog">
                    <h1>{{ $blog->title }}</h1>
                    <h2>{{ $blog->content }}</2>
                    <div class="blog-btn">
                        <a class="stylebtn" href="{{route('editblogs', $blog->id)}}">Edit</a>
                        <a class="stylebtn" href="{{route('deleteblogs', $blog->id)}}">Delete</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endsection
