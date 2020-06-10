@extends('layouts.app')
        @section('content')
        <a class="add-btn" href="{{route('addfaq')}}">Add</a>
            <div class="faq-container">
                @foreach ($faqs as $faq)
                <div class="blog">
                    <h1>{{$faq->question}}</h1>
                    <h2>{{$faq->answer}}</2>
                    <div class="faq-btn">
                        <a class="btn" href="{{route('editfaq', $faq->id)}}">Edit</a>
                        <a class="btn" href="{{route('deletefaq', $faq->id)}}">Delete</a>
                    </div>
                </div>
                @endforeach
            </div>
            @endsection
