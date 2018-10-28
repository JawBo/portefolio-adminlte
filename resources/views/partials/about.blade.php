<section class="about" id="sectAbout">

    <h2>About Me</h2>
    <span>Lorem ipsum dolor sit consectetur elit.</span>
    <hr>
    <section class="container">
        <section class="row">
        @foreach ($contenuAbout as $item)
        <div class="col-sm-4 my-3">
                <div class="skills ">
                    <div class="logo">
                        <i class="{{$item->icone}}"></i>
                    </div>
                    <h4>{{$item->about}}</h4>
                    <p>{{$item->description}}</p>
                </div>
            </div>
        @endforeach
    
        </section>
    </section>

</section>