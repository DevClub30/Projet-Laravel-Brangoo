
<div class="card" style="width: 18rem;">
  <img src="{{$categorie->imageurl()}} " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
      <a href="{{route('categorie.show',['slug'=>$categorie->getslug(),'categorie'=>$categorie])}}">{{$categorie->designation}}</a>
    </h5>
    <hr>
    <h5>Caracteristiques</h5>
    <p class="card-text">Provenance: {{$categorie->region}}  {{$categorie->tagsA}}  {{$categorie->tagsS}}</p>
    
    <p class="text-primary fm-bold" style="font-size:1.4rm;"> 
        {{number_format($categorie->prix, thousands_separator:' ')}}FCFA
    </p> 
  <button><a href="{{route('categorie.show',['slug'=>$categorie->getslug(),'categorie'=>$categorie])}}">Voir le produit</a></button>
  </div>
</div>