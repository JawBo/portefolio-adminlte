@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>You are logged in!</p>
<a href="/">Portefolio</a>

<body>

    <section class="row">
        @foreach ($contenuAbout as $item)
        <div class="col-sm-1"></div>
        <div class="col-sm-10 bg-light " style=" padding:15px 15px;">

            <section class="row">
                <div class="col-sm-6">
                    <div class="text-center" style="font-size: 35px; padding: 15px 25px; ">
                        <i class="{{$item->icone}} "></i>
                        <p class="">{{$item->about}}</p>
                        <h3>{{$item->description}}</h3>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div style="font-size: 25px; padding: 15px 25px; ">
                        <form action="/admin/about/{{$item->id}}/change" method="post">
                            @csrf
                            <div class="p-3">
                                <select name="icone" id="">
                                    @foreach ($contenuIcones as $icone)
                                    <option value="{{$icone->class}}">{{$icone->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="p-3">
                                <input type="text" name="about" value="{{old('about')}}" id="" placeholder="{{$item->about}}">
                            </div>
                            <div class="p-3">
                                <input type="text" name="description" value="{{old('description')}}" id="" placeholder="{{$item->description}}">
                            </div>
                    </div>
                </div>
                <div class="col-sm-1 ">
                    <button type="submit" class="btn btn-success">Changer</button>
                    </form>
                </div>
            </section>
            <hr>
        </div>
        <div class="col-sm-1"></div>
        @endforeach
    </section>



</body>
@stop
