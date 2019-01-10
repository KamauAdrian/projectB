<div class="blog-post">


    <h2 class="blog-post-title"><a href="{{$post->id}}">{{$post->title}}</a></h2>

    {{--<p class="blog-post-meta">{{$post->user->name}} on {{$post->created_at->toFormattedDateString()}}</p>--}}
    <p>{{$post->body}}</p>


    {{--{{$post->path}}--}}






    <div class="imagecontainer">
        <img height="100px" src="images/{{$image = $post->path}}" alt="">
    </div>






</div><!-- /.blog-post -->