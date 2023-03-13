<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>profile</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <div class="row content-panel w-100 h-100 containered ">
        <!-- /col-md-4 -->
        <div class="col-4 profile-pic">
            <p><img src="{{asset('img/ui-sam.jpg')}}" class="img-circle"></p>
            <p>
                <button class="btn btn-theme02">Modifier profil</button>
            </p>
        </div>
        <div class="col-4 profile-text">
            <h4>NOM </h4>
            <h6>SODJI</h6>
            <h4>PRENOMS</h4>
            <h6>Beunador</h6>
            <h3><img class="m-1" style="width: 20px; height:20px" src="{{ asset('img/location.svg')}}" alt="">LOCALISATION</h3>
            <h6>Bénin</h6>
            <div class="">
            <a class="btn-primary rounded-1 p-2 text-decoration-none" href="{{route('modifications')}}"> Modifier les informations personnelles</a>
        </div>
        </div>
        
    </div>

     <div class="col-2 p-3 ">
            <h4 class="btn-primary text-center rounded-1 p-2">Vos articles</h4>
        </div>

    <!-- les articles poster -->
    <div class="row pt-1 mb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img1.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1 ">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img2.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img3.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img4.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>

        <!-- deuxieme ligne -->
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/banner-43.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img6.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img7.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img8.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>

        <!-- 3 lignes -->
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img9.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img2.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/img9.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{asset('img/banner-41.jpg')}}" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Colorful Stylish Shirtbvvvvvv</h6>
                    <div class="d-flex justify-content-center">

                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Modifier</a>
                    <a href="" class="btn btn-sm text-danger p-0"><i class="fas fa-shopping-cart text-danger mr-1"></i>Supprimer</a>
                </div>
            </div>
        </div>
</body>

</html>