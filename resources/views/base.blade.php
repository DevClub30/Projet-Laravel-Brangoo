<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png">
    <title>
      @yield('title')
    </title>
    <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top" arial-label="Furni navigation bar" >

			<div class="container">
				<a class="navbar-brand" href="/"><img src="/images/favicon.png" alt="" srcset=""> Brangoo.<span>.</span>.</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

					@php
              $route= request()->route()->getName();
              
          @endphp

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="/">Acceuil</a>
						</li>
						<li><a class="nav-link" @class(['nav-link','active' => str_contains($route,'categorie.')]) href="{{route('categorie.index')}}">Nos Prodruits</a></li>
						<li><a class="nav-link" href="">A propos</a></li>
						<li><a class="nav-link" href="">Services</a></li>
						<!--  <li><a class="nav-link" href="blog.html">Blog</a></li> -->
						<li><a class="nav-link" href="">Contactez Nous</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
             @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
						          <li><a class="nav-link" href="{{ route('login') }}"><img src="/images/user.svg"></a></li>

           
                      @endauth

           @endif
						<li><a class="nav-link" href="cart.html"><img src="/images/cart.svg">(<span class="badge badge-pill badge-dark">{{Cart::count()}}</span>)</a></li>
					</ul>
				</div>
			</div>

     <!--  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

		</nav>
 
               <!-- 
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="/">Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            @php
            $route= request()->route()->getName();

            @endphp


            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link " aria-current="page" @class(['nav-link','active' => str_contains($route,'categorie.')]) href="{{route('categorie.index')}}">Produit</a> 
                <a class="nav-link " aria-current="page" >Panier <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a>
                <a class="nav-link" href="/"><img src="/images/cart.svg"> <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a>
              </div>
            </div>
          </div>
    </nav> 
                             -->


@include('Partials.header')   

@if(session('success'))
<div class="btn btn-success">
   {{session('success')}}
</div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="my-0">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class=" container-fluid">
      @yield('content')
  </div>
    
  @include('Partials.footer')   

</body>
  <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
  <script src="/bootstrap/js/bootstrap.js"></script>
  <script src="/js/custom.js"></script>
</html>