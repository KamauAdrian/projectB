@extends('layouts.master')
@include('layouts.nav')
@section('content')
    <center>
       <b><h2>Index page</h2></b>
    </center>
    <a href="{{route('create posts')}}">
        <button class="btn btn-info btn-lg">New Post</button>
    </a>
    @foreach($posts as $post)
        @include('posts.post')
    @endforeach
@endsection