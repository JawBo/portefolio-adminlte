@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>
    <a href="/">Portefolio</a>
    
<body>
    @include('partials/head')
    @include('partials/about')
    @include('partials/skills')
    @include('partials/comments')
    @include('partials/footer')
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="js/app.js"></script>

    </body>
@stop