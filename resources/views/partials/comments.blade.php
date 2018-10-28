<section id="commentsSection">
    
    <h2>Leave Your Comments Here</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li id="errorComment">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <section class="container my-5">
        <section class="row">

            <div class="col-md-6 py-3">
                <form action="/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="contact">
                        <input type="text" name="name" id="nameInp" placeholder="Your Name">
                        <input type="mail" name="mail" id="mailInp" placeholder="YourMail@mail.Com">
                        <br>
                        <textarea class="form-control" name="comment" placeholder="Your Comment" cols="30" rows="10"></textarea>
                        <br>
                        <input  type="file" name="image">
                        <button type="submit">Envoyer</button>
                    </div>
            </div>
            </form>
            <div class="col-md-6">
                <div class="carouselArea">
                    <!-- Google Maps -->

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            @foreach($contenuComments as $key => $item)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key+1}}"></li>
                            @endforeach --}}

                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <div class="commentCarou">
                                    <div class="imgcontact">
                                        @if(empty($contenuComments)===false )
                                        <img src="{{Storage::url($contenuComments[0]->image)}}" alt="profil_picture">
                                        <span>{{$contenuComments[0]->name}}</span>
                                        @endif
                                    </div>
                                    <hr>
                                    <div class="commentary">
                                        @if(empty($contenuComments)===false )
                                        <p>{{$contenuComments[0]->comment}}</p>
                                        @endif
                                    </div>
                                    <div class="email">
                                        @if(empty($contenuComments)===false )
                                        <a href="mailto:{{$contenuComments[0]->mail}}">{{$contenuComments[0]->mail}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @foreach($contenuComments as $item)
                            @if($loop->index != 0)
                            <div class="carousel-item text-center">
                                <div class="commentCarou">
                                    <div class="imgcontact">
                                        <img src="{{Storage::url($item->image)}}" alt="profil_picture">
                                        <span>{{$item->name}}</span>
                                    </div>
                                    <hr>
                                    <div class="commentary">
                                        <span>{{$item->comment}}</span>
                                    </div>
                                    <div class="email">
                                        <a href="mailto:{{$item->mail}}">{{$item->mail}}</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                            {{-- <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark p-3" aria-hidden="false"></span>
                                <span class="sr-only ">Previous</span>
                            </a>
                            <a class="carousel-control-next " href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon bg-dark p-3" aria-hidden="false"></span>
                                <span class="sr-only">Next</span>
                            </a> --}}
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </section>
</section>