@php
$page='propos';
@endphp

@extends('base')
@section('title','A propos')
@section('content')



<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Pourquoi nous choisir</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam delectus dolorum alias animi nihil.</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Livraison rapide &amp; gratuite</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, culpa!</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/bag.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Achat facile</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et, harum quis!</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Assistance 24h/24 et 7j/7</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis delectus dolorum veniam.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/return.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Retours sans frais</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum, aut ullam!</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="images/propos.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>


<div class="untree_co-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center">
                <h2 class="section-title">Notre équipe</h2>
            </div>
        </div>

        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/personne.jpg" class="img-fluid mb-5">
                <h3 clas><a href="#"><span class="">Sacko</span> Alassane</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/person_2.jpg" class="img-fluid mb-5">

                <h3 clas><a href="#"><span class="">Kadoua</span> Marc</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/person_3.jpg" class="img-fluid mb-5">
                <h3 clas><a href="#"><span class="">Sacko</span> Adama</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div> 
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0">
                <img src="images/person_1.jpg" class="img-fluid mb-5">

                <h3 clas><a href="#"><span class="">N'Guessan</span> Malick</a></h3>
                <span class="d-block position mb-4">CEO, Founder, Atty.</span>
                <p>Separated they live in.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div> 
            <!-- End Column 4 -->

        </div>
    </div>
</div>



<br>
<br>
<br>







@endsection