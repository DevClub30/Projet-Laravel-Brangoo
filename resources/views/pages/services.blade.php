@php
$page='services';
@endphp

@extends('base')
@section('title','Nos Services')
@section('content')


<div class="why-choose-section">
    <div class="container">
        
        
        <div class="row my-5">

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="images/truck.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Livraison rapide &amp; gratuite</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="images/bag.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Achat facile</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="images/support.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Assistance 24h/24 et 7j/7</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

            <div class="col-6 col-md-6 col-lg-3 mb-4">
                <div class="feature">
                    <div class="icon">
                        <img src="images/return.svg" alt="Image" class="imf-fluid">
                    </div>
                    <h3>Retours sans frais</h3>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                </div>
            </div>

        </div>
    
    </div>
</div>



<div class="product-section pt-0">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Nos produits sont cultuvés avec des materiaux des qualités</h2>
                <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
                <p><a href="#" class="btn">Decouvrire</a></p>
            </div> 
            <!-- End Column 1 -->

            @foreach($categories as $categorie)
					<!-- Start Column 4 -->
						<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
							<a class="product-item" href="{{route('categorie.show',['slug'=>$categorie->getslug(),'categorie'=>$categorie])}}">
								<img src="{{$categorie->imageurl()}}" class="img-fluid product-thumbnail">
								<h3 class="product-title">{{$categorie->designation}}</h3>
								<strong class="product-price">  {{number_format($categorie->prix, thousands_separator:' ')}}FCFA</strong>

								<span class="icon-cross">
									<img src="/images/cross.svg" class="img-fluid">
								</span>
							</a>
						</div>
					<!-- End Column 4 -->
					@endforeach

        </div>
    </div>
</div>

<br>
<br>
<br>



@endsection