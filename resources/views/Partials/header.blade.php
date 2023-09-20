        <!-- <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="/">Mon Site</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                    @php
                    $route= request()->route()->getName();

                    @endphp

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
						</li>
						<li><a class="nav-link" @class(['nav-link','active' => str_contains($route,'categorie.')]) href="{{route('categorie.index')}}">Produit</a></li>
						<li><a class="nav-link" href="#">About us</a></li>
						<li><a class="nav-link" href="#">Services</a></li>
						<li><a class="nav-link" href="#">Blog</a></li>
						<li><a class="nav-link" href="#">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="#"><img src="/images/"></a></li>
						<li><a class="nav-link" href="#"><img src="/images/user.svg"></a></li>
						<li><a class="nav-link" href="/"><img src="/images/cart.svg">(<span class="badge badge-pill badge-dark">{{Cart::count()}}</span>)</a></li>
					</ul>
				</div>
			</div>
            
				
		</nav> -->
		<!-- Start Hero Section -->
		
		@switch($page)
			@case('home'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1>Vente Moderne <span clsas="d-block">de Culture Vivrière en Ligne</span></h1>
									<p class="mb-4"> à trés bon prix partout en Cote d'ivoire</p>
									<p><a href="" class="btn btn-secondary me-2">Acheter un produit</a><a href="#" class="btn btn-white-outline">Explorer</a></p>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="hero-img-wrap">
									<img src="/images/pngegg (2).png" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>
			@break
			@case('produits'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1>Mes Produits</h1>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="hero-img-wrap">
									<img src="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>	
			@break
			@case('propos'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1></h1>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="hero-img-wrap">
									<img src="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>	
			@break
			@case('services'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1></h1>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="hero-img-wrap">
									<img src="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>	
			@break
			@case('blog'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1></h1>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="hero-img-wrap">
									<img src="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>	
			@break
			@case('contact'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1></h1>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="hero-img-wrap">
									<img src="" class="img-fluid">
								</div>
							</div>
						</div>
					</div>
				</div>	
			@break


		@endswitch
		<!-- End Hero Section -->
		
        