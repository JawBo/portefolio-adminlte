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
        @foreach ($contenuComments as $item)
        <div class="col-sm-1"></div>
        <div class="col-sm-10 bg-light " style=" padding:15px 15px;">

          <section class="row">
                <div class="col-sm-3 p-5 text-center">
                   <img style="border: 3px solid rgb(146, 146, 146); width: 150px;height: 150px;border-radius: 50%;"
                        src="{{Storage::url($item->image)}}" alt="profil_picture">
                </div>
                <div class="col-sm-6">
                    <div class="text-center" style="font-size: 25px; padding: 15px 25px; ">
                        <h2 class=" ">{{$item->name}} </h2>
                        <p class="">{{$item->comment}}</p>
                        <h3 class="text-info">{{$item->mail}}</h3>
                    </div>
                </div>
                
                <div class="col-sm-3 ">
                    <form action="/admin/comment/{{$item->id}}/delete" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
          </section>



            <hr>

        </div>
        <div class="col-sm-1"></div>
        @endforeach
    </section>







    {{-- @foreach ($contenuComments as $item)
    <div class="commentCarou">
        <div class="imgcontact">
            <img src="{{Storage::url($item->image)}}" alt="profil_picture">
            <span>{{$item->name}}</span>
        </div>
        <div class="commentary">
            <span>{{$item->comment}}</span>
        </div>
        <div class="email">
            <a href="mailto:{{$item->mail}}">{{$item->mail}}</a>
        </div>
    </div>
    </div>
    @endforeach --}}

</body>
@stop
