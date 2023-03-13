@extends("Categories.base")
@section('menu')
    <a href="{{url('/categories')}}" class="nav-item nav-link " style="color: white;">Acceuil</a>
    <a href="{{route('articles.index')}}" class="nav-item nav-link" style="color: white;">Achat</a>
    <a href="{{route('articles.create')}}" class="nav-item nav-link active" style="color: black;">Vente</a>

@endsection
@section('content')
<div class="container">
    <div class="card" style="margin-top: 20%;" >
        <div class="card-header text-align-center" style="background-color: #4054B2 ; color:white;text-align:center ">Renseignez les informations de l'article que vous voulez vendre</div>
            <div class="card-body">
                <form method ="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">

                                <input required type="texte" name="nom" placeholder="veuillez entrer le nom de l'article">
                            </div>
                            <div class="mb-3">
                                <input required type="number"  name="prix" placeholder="veuillez entrer le prix de l'article">
                            </div>
                            <div class="mb-3">
                                <textarea type="text" name="description" id="description" placeholder="veuillez renseigner sur l'état de l'article"></textarea>
                            </div>

                        </div>
                        <div class="col">

                            <div class="mb-3">
                                <input required type="texte" name="taille" placeholder="veuillez entrer la taille de l'article">
                            </div>
                            <div class="mb-3">
                                        <select name="categorie_id"  required>
                                            <option value="1" >vêtement</option>
                                            <option value="2" >machine</option>
                                            <option value="3">antiquité</option>
                                            <option value="4" >meuble</option>
                                            <option value="5" >autre</option>
                                            </select>        </div>
                            <div class="mb-3">
                                <input required type="hidden" name="vendeur_id"  value="1">
                            </div>
                            <div >
                                <input  class="form-control form-control-lg" id="formFileSm" required  name="image"  type="file" placeholder="veuillez ajouter une photo de l'article">
                            </div>

     </div>

    </div>
    <div class=" mb-3" style="margin-top: 3%; ">
        <input  type="submit" value="Save"  style="color:white; background-color:#4054B2" id="bouton">
    </div>
    @csrf

</form>
        </div>
    </div>


</div>
@endsection
