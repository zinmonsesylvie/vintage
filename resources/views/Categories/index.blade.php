@extends("Categories.base")
@section('menu')
    <a href="{{asset('categories')}}" class="nav-item nav-link active" style="color: black;">Acceuil</a>
    <a href="{{route('articles.index')}}" class="nav-item nav-link" style="color: white;">Achat</a>
    <a href="{{route('articles.create')}}" class="nav-item nav-link"style="color: white;">Vente</a>


@endsection

@section('content')
<div class="container-fluid" style="margin-top: 13%;">
                <div id="header-carousel" class="carousel slide " data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="{{asset('shoppingenligne.avif')}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 100%">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">redonnez vie aux choses</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Prix raisonnable</h3>
                                    <a href="" class="btn btn-light py-2 px-3" style="color: #4054B2; ">Achète maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="{{asset('img/cat-2.jpg')}}" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">fais du ménage et gagne de l'argent</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Super efficace</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Vends maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0" style="font-size: small;">Produit réutilisable</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0" style="font-size: small;">Produit presque neuf</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0" style="font-size: small;">Produit a moindre coût</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0" style="font-size: small;">Produit sécurisé</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">

                <div class="position-relative bg-secondary text-center text-md-left text-white py-5 px-5 w-100" >
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3" style="text-align: center;">Nos catégories d'article</h5>
                    </div>
                </div>
        </div>
    </div>

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href="{{route('articleByCategorie', 1)}}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/cat-1.jpg')}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Vêtement</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href=" {{ route('articleByCategorie', 2) }} " class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/cat-2.jpg')}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">machine</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href=" {{ route('articleByCategorie', 3) }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/cat-3.jpg')}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">antiquité</h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href=" {{ route('articleByCategorie', 4) }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/cat-5.jpg')}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">meuble</h5>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href=" {{ route('articleByCategorie', 6) }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/cat-4.jpg')}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">accessoires</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <a href=" {{ route('articleByCategorie', 5) }}" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/cat-6.jpg')}}" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">autre</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->


    <!-- Offer Start -->
    <div class="container-fluid offer pt-5">
        <div class="row px-xl-5">

                <div class="position-relative bg-secondary text-center text-md-left text-white py-5 px-5 w-100" >
                    <img src="{{asset('img/offer-2.png')}}" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">cliquez sur le bouton pour voir tous nos articles</h5>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Voir plus</a>
                    </div>
                </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->

    @endsection
