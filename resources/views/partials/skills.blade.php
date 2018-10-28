<!-- Début des skills -->
<section class="jsbody">
    <div class="jsfilter"></div>
    <section class="container">

        <section class="row jscol ">
            @foreach ($contenuSkills as $item)
            <div class="col-sm-3 jsnumber">
                <div>
                    <i class="{{$item->icone}}"></i>
                    <p class="count">{{$item->amount}}</p>
                    <h3>{{$item->skill}}</h3>
                </div>
            </div>
            @endforeach

        </section>
    </section>
    <!-- Fin des skills -->
</section>

