<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/app.css')}}">

</head>

<body>

    <section class="imdoe">


    </section>
    <div class="navDiv">
        <nav class="navigbar">
            <div class="divSpan">
                <span><a href=""> Portefolio </a></span>
            </div>
            <div class="divUL">
                <ul>
                    <li> <a href=""> Home </a></li>
                    <li> <a href=""> About </a></li>
                    <li> <a href=""> Portefolio </a></li>
                    <li> <a href=""> Testimonials </a></li>
                    <li> <a href=""> Contact Me </a></li>
                </ul>
            </div>
        </nav>
    </div>

    <section class="container1">
        <h1>
            <span class="title">Welcome</span>
            <span class="title">to my</span>
            <span class="title">Portefolio</span>
        </h1>

        <div class="button">restart</div>
    </section>
    <div class="divDoe">

        <!-- <a href=""><i class="fab fa-facebook-square"></i></a>
<a href=""><i class="fab fa-twitter"></i></a>
<a href=""><i class="fab fa-instagram"></i></a>
<a href=""><i class="fab fa-linkedin"></i></a> -->
    </div>



    <section class="about">

        <h2>A Story About Me</h2>
        <span>Lorem ipsum dolor sit consectetur elit.</span>

        <section class="container">
            <section class="row">
                <div class="col-sm-4 my-3">
                    <div class="skills ">
                        <div class=" logo">
                            <i class="fab fa-wordpress"></i>
                        </div>
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eius? </p>
                    </div>
                </div>
                <div class="col-sm-4 my-3">
                    <div class="skills">
                        <div class="logo">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <h4>Internet Marketing</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eius? </p>
                    </div>
                </div>
                <div class="col-sm-4 my-3">
                    <div class="skills">
                        <div class="logo">
                            <i class="fab fa-connectdevelop"></i>
                        </div>
                        <h4>Voice Recording</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, eius? </p>
                    </div>
                </div>
            </section>
        </section>


    </section>
    <!-- Début des skills -->
    <section class="jsbody">
        <div class="jsfilter"></div>

        <section class="row jscol ">
            <div class="col-md-3 jsnumber">
                <div>
                    <i class="fas fa-handshake"></i>
                    <p class="count">100</p>
                    <h3>Complete Project</h3>
                </div>
            </div>
            <div class="col-md-3 jsnumber">
                <div>
                    <i class="fas fa-grin-alt"></i>
                    <p class="count">50</p>
                    <h3>Happy Clients</h3>
                </div>
            </div>
            <div class="col-md-3 jsnumber">
                <div>
                    <i class="fas fa-coffee"></i>
                    <p class="count">300</p>
                    <h3>Cup of Coffee</h3>
                </div>
            </div>
            <div class="col-md-3 jsnumber">
                <div>
                    <i class="fas fa-award"></i>
                    <p class="count">20</p>
                    <h3>Awards</h3>
                </div>
            </div>
        </section>
    </section>
    <!-- Fin des skills -->
    <section class="container">
        <section class="row">
            
                <div class="col-md-6">
            <form action="/create" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="contact">
                        <input type="text" name="name" id="nameInp" placeholder="Your Name">
                        <input type="mail" name="mail" id="mailInp" placeholder="YourMail@mail.Com">
                        <br>
                        <textarea class="form-control" name="comment" placeholder="Your Comment" cols="30" rows="10"></textarea>
                        <br>
                        <input type="file" name="image">    
                        <button type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
                <div class="col-md-6">
                    <div class="carouselArea">
                        <!-- Google Maps -->

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                @foreach($contenuComments as $key => $item)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$key+1}}"></li>
                                @endforeach

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <div>
                                    <div class="imgcontact"><img  src="{{Storage::url($contenuComments[0]->image)}}"
                                                alt=""></div>
                                        <div>
                                            <h3>{{$contenuComments[0]->name}}</h3>
                                            <span>{{$contenuComments[0]->comment}}</span>
                                        </div>
                                        
                                        <div>
                                            <p>{{$contenuComments[0]->mail}}</p>
                                        </div>
                                    </div>

                                </div>
                                @foreach($contenuComments as $item)

                                @if($loop->index != 0)
                                <div class="carousel-item text-center">
                                    <div>
                                        <div>
                                            <div class="imgcontact">
                                                <img  src="{{Storage::url($item->image)}}" alt="">
                                            </div>
                                            <h3>{{$item->name}}</h3>
                                            <span>{{$item->comment}}</span>
                                        </div>
                                        <div>
                                            <p>{{$item->mail}}</p>
                                        </div>
                                    </div>

                                </div>
                                @endif
                                @endforeach

                                <a class="carousel-control-prev btn-success" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next btn-success" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

        </section>
    </section>



    <script src="js/app.js"></script>
</body>

</html>
