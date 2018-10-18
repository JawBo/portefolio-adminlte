<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
</head>

<body>
    @include('partials/head')
    @include('partials/about')
    @include('partials/skills')
    @include('partials/comments')
    @include('partials/footer')

  


    <script src="js/app.js"></script>
</body>

</html>
