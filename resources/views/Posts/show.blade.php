@extends('layouts.master')
@section('navbar')
    @include('layouts.nav')
@endsection
@section('content')
    <hr>

    <div>
        <h1>{{$post->title}}</h1>
        {{$post->body}}
    </div>
    <div>


        {{--{{$post->id}}/delete--}}
        <a href="{{$post->id}}/delete}}">
            <button class="btn btn-danger" type="button">Delete post</button>
        </a>

        <a href="{{$post->id}}/edit">
            <button class="btn btn-info" type="button">Edit Post</button>
        </a>

    </div>
    <hr>
    {{--<div class="comments">--}}
        {{--<ul class="list-group">--}}
            {{--@foreach($post->comments as $comment)--}}
                {{--<li class="list-group-item">--}}
                    {{--{{$comment->user}}--}}
                    {{--<strong>{{$comment->created_at->diffForHumans()}}:</strong> {{$comment->body}}--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--</div>--}}
    <div class="card">
        <div class="card-block">
            <form method="post" action="{{$post->id}}/comments">
                @csrf
                <div class="form-group">
                    <textarea name="body" id="body" class="form-control" placeholder="Your Comments here"></textarea>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-info">Add Comment</button>
                    </div>
                </div>
            </form>
            @include('layouts.errors')
        </div>
    </div>

@endsection