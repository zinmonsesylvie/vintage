@extends("Categories.base")
@section('menu')
    <a href="{{asset('categories')}}" class="nav-item nav-link ">Acceuil</a>
    <a href="{{route('articles.index')}}" class="nav-item nav-link">Achat</a>
    <a href="{{route('articles.create')}}" class="nav-item nav-link active" >Vente</a>
    
@endsection
@section('content')
<div class="container">
    <div class="card" style="margin-top: 20px;">
        <div class="card-header text-align-center" style="background-color: #4054B2 ; color:white;text-align:center ">Créer un nouveau article</div>
        <div class="card-body">
    <form method ="POST" action="{{route('articles.store',$article->id)}}" enctype="multipart/form-data">
<div class="row">
    <div class="col">
        <div class="mb-3">
            
            <input type="texte" name="nom" placeholder="veuillez entrer le nom de l'article" value="{{$article->id}}">
        </div>
        <div class="mb-3">
            <input type="number"  name="prix" placeholder="veuillez entrer le prix de l'article" value="{{$article->prix}}">
        </div>
        <div class="mb-3">
            <textarea type="text" name="etat" id="etat" placeholder="veuillez renseigner sur l'état de l'article" >{{$article->etat}}</textarea>
        </div>
        <div class="mb-3">
            <input type="text" name="statut" value="actif" >
        </div>
    </div>
    <div class="col">
        
        <div class="mb-3">
            <input type="texte" name="taille" placeholder="veuillez entrer la taille de l'article" >
        </div>
        <div class="mb-3">
            <input type="number" name="categorie_id" placeholder="veuillez choisir la catégorie de l'article">
        </div>
        <div class="mb-3">
            <input type="number" name="utilisateur_id"  value="1">
        </div>
        <div>
            <input  name="photo"  type="file" placeholder="veuillez ajouter une photo de l'article"><br><br><br>
        </div>
        <div class=" mb-3">
            <input type="submit" value="Save"  style="color:white; background-color:#4054B2" id="bouton"> 
        </div>
    </div>  
                @csrf
    
    
</div> 
   
</form>
        </div>
    </div>

    
</div>
@endsection
