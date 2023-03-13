@extends("Categories.base")
@section('menu')
    <a href="{{url('/categories')}}" class="nav-item nav-link text-white" >Acceuil</a>
    <a href="{{route('articles.index')}}" class="nav-item nav-link text-dark " >Achat</a>
    <a href="{{route('articles.create')}}" class="nav-item nav-link text-white">Vente</a>

@endsection
@section('content')
    <div style="margin-top: 20%">
    <!--Début des détails -->
    {{$details}}
    </div>
    @foreach ($details as $detail )
        <div class="row">
            <div class="col">
                <img src="{{asset('storage/'.$detail->image)}}" alt="" width="20%" height="20%">
            </div>
            <div class="col">
            </div>
        </div>
    @endforeach



   <!--Fin des détails -->


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
