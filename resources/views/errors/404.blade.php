@extends('layout')

@section('content')
<div class="error-area" style="background-image: url(img/404-bg.png)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Error 404</h1>
                <a href="{{route('home')}}" class="button">Back to home</a>
            </div>
        </div>
    </div>
</div>  
@stop