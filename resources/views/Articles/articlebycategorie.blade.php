@extends("Categories.base")
@section('menu')
    <a href="{{url('/categories')}}" class="nav-item nav-link text-white" >Acceuil</a>
    <a href="{{route('articles.index')}}" class="nav-item nav-link text-dark " >Achat</a>
    <a href="{{route('articles.create')}}" class="nav-item nav-link text-white">Vente</a>

@endsection
@section('content')
    <div class="container-fluid pt-5" style="margin-top: 10%;" >
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Vêtements</span></h2>
        </div>

        {{-- @for($j = 0; $j <$articles->count()/4 ; $j++) --}}
        <div class="row px-xl-5 pb-3">
        @foreach ($articlebycategorie as $articlebycategories)



            {{-- @for ($i = 0; $i <4 ; $i++) --}}

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="{{asset('storage/'.$articlebycategories->photo )}}" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">

                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Détails</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Acheter</a>
                            </div>
                        </div>



                </div>




        @endforeach

    </div>

        </div>
    <!-- Products End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-1.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-2.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-3.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-4.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-5.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-6.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-7.jpg')}}" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="{{asset('img/vendor-8.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
