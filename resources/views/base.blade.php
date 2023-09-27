@php
 
    
       
  
     
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png">
    <title>
      @yield('title')
    </title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

              $user = "admin"
          @endphp

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="/">Acceuil</a>
						</li>
						<li><a class="nav-link" @class(['nav-link','active' => str_contains($route,'categorie.')]) href="{{route('categorie.index')}}">Nos Prodruits</a></li>
						<li><a class="nav-link" href="{{route('apropos')}}">A propos</a></li>
						<li><a class="nav-link" href="{{route('service')}}">Services</a></li>
            @auth
						 <li><a class="nav-link" href="{{route(Auth::user()->name===$user ?'admin.':'blog')}}">Blog</a></li>
            @endauth
						<li><a class="nav-link" href="{{route('contact')}}">Contactez Nous</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
              @if (Route::has('login'))
                    @auth
                      <li><a class="nav-link" href="/">{{ Auth::user()->name }} <img src="/images/profil.png" class="imagestyle"></a></li>
               
                    @else
						          <li><a class="nav-link" href="{{ route('login') }}"><img src="/images/user.png"></a></li>

                      @endauth

              @endif
						<li><a class="nav-link" href="{{route('cart.index')}}"><img src="/images/cart.svg">(<span class="badge badge-pill badge-dark">@yield('count') </span>)</a></li>
					</ul>

          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            @auth
              <form method="POST" action="{{ route('logout') }}">
                  @csrf

                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"> </x-dropdown-link>
                </form>
                
            @endauth
          </ul>
				</div>
			</div>

		</nav>
 

@include('Partials.header')   

  @if(session('success'))

    <script>
      Swal.fire({
      title: 'Succès!',
      text: '{{session('success')}} '  ,
      icon: 'success',
      confirmButtonText: 'OK',
      timer: 2500
    });
    </script>

  @endif
  
  @if(session('error'))

  <script>
    Swal.fire({
    title: 'Error!',
    text: '{{session('error')}} '  ,
    icon: 'error',
    confirmButtonText: 'OK',
    timer: 3000
  });
  </script>

@endif

  @if($errors->any())

    @foreach($errors->get() as $error)
      <script>
        Swal.fire({
        title: 'Erreur!',
        text: '{{$error}}'  ,
        icon: 'error',
        confirmButtonText: 'OK',
        timer: 2500
      });
      </script>
    @endforeach

  @endif
  
  <div class=" container-fluid">
      @yield('content')
  </div>
    
  @include('Partials.footer')   

</body>
  <script src="/bootstrap/js/bootstrap.js"></script>
  <script src="/js/custom.js"></script>
</html>