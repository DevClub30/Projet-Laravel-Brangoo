
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
									<p><a href="{{route('categorie.index')}}" class="btn btn-secondary me-2">Acheter un produit</a><a href="{{route('categorie.index')}}" class="btn btn-white-outline">Explorer</a></p>
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
									<h1>Nos Produits</h1>
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
									<h1>A propos</h1>
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
									<h1>Nos services</h1>
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
									<h1>Mon blog</h1>
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
									<h1>Contactez-nous</h1>
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
			@case('panier'):
				<div class="hero">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-5">
								<div class="intro-excerpt">
									<h1>Mes Commandes</h1>
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
		
        