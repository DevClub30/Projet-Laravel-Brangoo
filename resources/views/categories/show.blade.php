@php
$page='produits';
@endphp

@extends('base')

@section('title',$categorie->designation)

@section('content')


<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">@yield('title')</h2>
                <p>{{$categorie->tagsA}}</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/location.png" alt="Image" class="imf-fluid">
                            </div>
                            <h3>{{$categorie->region}}</h3>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/chat.png" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Commentaire</h3>
                            <p>{{$categorie->tagsG}}  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid molestiae odit reiciendis natus reprehenderit dolore vero dolores doloremque a distinctio animi iusto, laudantium eaque quia.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="/images/money_2.png" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Prix</h3>
                            <p>{{number_format($categorie->prix, thousands_separator:' ')}} FCFA</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <form action="{{route('cart.store')}}" method="post">
                                @csrf
                                @include('partials.input',['name'=>'produit_id','value'=>"$categorie->id",'type'=>'hidden'])
                          
                                <button type="submit" class="btn btn-dark"> Ajouter au panier </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{$categorie->imageurl()}}" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>





@endsection