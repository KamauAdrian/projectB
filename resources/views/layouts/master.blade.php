
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- Styles -->

    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('css/blog.css')}}" rel="stylesheet">
    {{--<link href="{{url('css/app.css')}}" rel="stylesheet">--}}

</head>

<body>
@if($flash = session('message'))
    <div class="alert alert-success" role="alert">
        {{$flash}}
    </div>
@endif

<div class="container">
    <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            @yield('content')

        </div><!-- /.blog-main -->

        @include('layouts.sidebar')


    </div><!-- /.row -->

</div><!-- /.container -->

@include('layouts.footer')
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/app.js')}}"></script>

<script src="{{url('js/bootstrap.js')}}"></script>

</body>
</html>
