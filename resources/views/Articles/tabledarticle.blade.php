<div class="card-body"><h5 class="card-title">Table Article</h5>
                                            <table class="mb-0 table  ">
                                                <thead >
                                                <tr style="background-color: #4054B2 ; color:white;text-align:center ">
                                                    <th>Id</th>
                                                    <th>nom</th>
                                                    <th>Prix</th>
                                                    <th>Etat</th>
                                                    <th>Statut</th>
                                                    <th>Taille</th>
                                                    <th>Photo</th>
                                                    <th>Categorie</th>
                                                    <th>Vendeur</th>
                                                    <th>Modifier</th>
                                                    <th>Supprimer</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table-bordered">
                                                    @foreach ($articles as $article)
                                                    <?php
                                                        $categorieid=$article->categorie_id;
                                                        switch($categorieid){
                                                            case 1:
                                                                $categoriename='vêtement';
                                                                break;
                                                            case 2:
                                                                $categoriename='machine';
                                                                break;
                                                            case 3:
                                                                $categoriename='antiquité';
                                                                break;
                                                            case 4:
                                                                $categoriename='meuble';
                                                                break;
                                                            case 5:
                                                                $categoriename='Autre';
                                                                break;
                                                            return $categoriename  ;  
                                                                
                                                        }
                                                    ?>
                                                    <tr>
                                                        <td><center>{{$article->id}}</center></td>
                                                        <td><center>{{$article->nom}}</center></td>
                                                        <td><center>{{$article->prix}}</center></td>
                                                        <td><center>{{$article->etat}}</center></td>
                                                        <td><center>{{$article->statut}}</center></td>
                                                        <td><center>{{$article->taille}}</center></td>
                                                        <td><img src="{{asset('storage/'.$article->photo)}}" width="50px" height="50px" alt=""></td>
                                                        
                                                        <td><center>{{$categoriename}}</center></td>
                                                        <td><center>{{$article->utilisateur_id}}</center></td>
                                                        <td><center><a class="btn btn-primary mb-3 text-white" href="{{url('articles/'.$article->id.'/edit')}}"  style="border-radius: 5px;">
                                                         Modifier
                                                        <td><center><a  style="  border-radius: 5px;" href="#" Onclick = "if(confirm('Voulez vous vraiment supprimer cet article?'))
                                                         {document.getElementById('form-{{$article->id}}').submit()}" class="btn btn-danger mb-3 text-white" >
                                                            Supprimer
                                                        </a>
                                                    <form id="form-{{$article->id}}" action="{{route('articles.destroy',$article->id)}}" method="POST">
                                                        @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    </form>
                                                        
                                                    </form>
                                                    </center> </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
</div>
<div class="col-auto">
    <a type="submit" class="btn btn-primary mb-3 text-white" href="{{url('Articles/create')}}" style="  border-radius: 5px;
">Add now </a>
  </div>