@extends('frontend.layouts.app')
@section('title','Home Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!--// Header -->
<!-- Start Slider Area -->
<div class="slider_area slide_active">
	<!-- Start Slider Area -->
	<section>
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active"> <img src="{{ asset('assets/img/banner/Slides-Marques01.jpg') }}" class="d-block w-100" alt="..."> </div>
				<div class="carousel-item"> <img src="{{ asset('assets/img/banner/Slides-Marques05.jpg') }}" class="d-block w-100" alt="..."> </div>
				<div class="carousel-item"> <img src="{{ asset('assets/img/banner/Slides-Marques07.jpg') }}" class="d-block w-100" alt="..."> </div>
				<div class="carousel-item"> <img src="{{ asset('assets/img/banner/Slides-Tendance-0-A-CHARGE.jpg') }}" class="d-block w-100" alt="..."> </div>
				<div class="carousel-item"> <img src="{{ asset('assets/img/banner/Slides-Tendance01.jpg') }}" class="d-block w-100" alt="..."> </div>
				<div class="carousel-item"> <img src="{{ asset('assets/img/banner/Slides-Tendance02.jpg') }}" class="d-block w-100" alt="..."> </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
		</div>
	</section>
	<!-- End Slider Area -->
</div>
<!-- End Slider Area -->
<!-- End Slider Area -->
<div class="shipping_service bg_image--3 ptb--90">
	<div class="shipping_wrap">
		<div class="row">
			<!-- Start Single -->
			<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
				<div class="service item_1">
					<div class="icon">
						<a href="#"> <img src="{{ asset('assets/img/icons/ship_icon_1.png') }}" alt="icon"> </a>
					</div>
					<div class="content">
						<h3>Parrainage</h3>
						<p>Gagnez des miles en parrainant les membres de votre famille ou en parrainant vos amis...</p>
					</div>
				</div>
			</div>
			<!-- End Single -->
			<!-- Start Single -->
			<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
				<div class="service item_2">
					<div class="icon"> <img src="{{ asset('assets/img/icons/ship_icon_2.png') }}" alt="icon"> </div>
					<div class="content">
						<h3>Nos Produits</h3>
						<p>Les verres Unifocaux, les verres progressifs, les verres bifocaux : à chaque verre, ses avantages...</p>
					</div>
				</div>
			</div>
			<!-- End Single -->
			<!-- Start Single -->
			<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
				<div class="service item_3">
					<div class="icon"> <img src="{{ asset('assets/img/icons/ship_icon_3.png') }}" alt="icon"> </div>
					<div class="content">
						<h3>Nos Partenaires</h3>
						<p>Tendance Optique, c'est un grand réseau de partenaires proposant les marques les plus connues...</p>
					</div>
				</div>
			</div>
			<!-- End Single -->
			<!-- Start Single -->
			<div class="col-lg-6 col-xl-3 col-sm-6 col-12">
				<div class="service item_4">
					<div class="icon"> <img src="{{ asset('assets/img/icons/ship_icon_4.png') }}" alt="icon"> </div>
					<div class="content">
						<h3>Nos Offres</h3>
						<p>Votre équipement Monture tendance ou à la mode + Verres aux choix garantis tous risques...</p>
					</div>
				</div>
			</div>
			<!-- End Single -->
		</div>
	</div>
</div>
<!-- Start How To Work Area -->
<!-- Start How To Work Area -->
<section class=" work_area bg-dark p-5">
	<div class="container">
		<div class="row g-0 align-items-center text-center">
			<div class="col-lg-12 col-12 ">
				<h2 class="">Je deviens membre du club Tendance et bénéficie d'avantages<a href="#"><i class="fa fa-arrow-right text-white ms-3"></i></a></h2> </div>
		</div>
	</div>
</section>
<!-- End How To Work Area -->
<!-- Start Video Block Area -->
<div class="video_block_area ">
	<!-- <div class="container"> -->
	<div class="row">
		<div class="col-lg-12">
			<div class="video_block_inner">
				<div class="thumb">
					<a href="#"> <img src="{{ asset('assets/img/blog/video_block.jpg') }}" alt="video img" class="w-100"> </a>
				</div>
				<div class="video__btn">
					<a class="play__btn" href="https://www.youtube.com/watch?v=jFKUtYbrKUk"> <i class="fa fa-play"></i> </a>
				</div>
			</div>
		</div>
	</div>
	<!-- </div> -->
</div>
<!-- End Video Block Area -->
<!-- Start Product Area -->
<div class="product_area section-pt-xl  ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nos Offres</h2>
					<p>Nos offres et services adaptés à votre budget. </p>
				</div>
			</div>
		</div>
		<!-- Start Banner Area -->
		<div class="banner_area ">
			<div class="row g-1 m-4">
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/slidereste0.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Marques01.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Marques05.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
			</div>
			<div class="row g-1 m-4">
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Marques07.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Tendance-0-A-CHARGE.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Tendance01.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
			</div>
			<div class="row g-1 m-4">
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Tendance02.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/Slides-Tendance11.jpg') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="banner">
						<div class="thumb">
							<a href="#"> <img src="{{ asset('assets/img/banner/banner-3.png') }}" alt="banner img"> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner Area -->
	</div>
</div>
<!-- End Product Area -->
<!-- Start Product Area -->
<div class="product_area section-pt-xl ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nos Produits
                    </h2>
					<p>Les verres unifocaux, les verres progressifs, les verres bifocaux : à chaque verre, ses avantages...</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Product Area -->
<!-- Start CounteUp Area -->
<div class="counterup_area mt--10">
	<div class="counterup_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="counter_content_inner">
						<div class="counter_content">
							<div class="thumb"> <img src="{{ asset('assets/img/banner/Slide-NosProduits.jpg') }}" alt="banner images"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End CounteUp Area -->
<!-- End CounteUp Area -->
<div class="video_block_area ">
	<!-- <div class="container"> -->
	<div class="row mt--35">
		<div class="col-lg-12">
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/YwGELrJVels" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</div>
	<!-- </div> -->
</div>
<!-- Start Product Area -->
<!-- Start Product Area -->
<div class="product_area section-pt-xl bg-grey pb--100 ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nos Marques</h2> </div>
			</div>
		</div>
		<div class="row">
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/prada.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/diesel.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/johngaliano.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/christiandiorparis.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
		</div>
		<div class="row">
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/prada.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/diesel.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/johngaliano.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/christiandiorparis.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
		</div>
	</div>
</div>
<!-- End Product Area -->
<!-- Start Product Area -->
<div class="product_area  section-pt-xl ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nos Partenaires</h2> </div>
			</div>
		</div>
		<div class="row ">
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/Logo-optovision.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/Logo-Maitre-Opticien.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/Logo-SEIKO.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/img/logo/johngaliano.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
		</div>
	</div>
</div>
<!-- End Product Area -->
<div class="blog_area section-ptb-xl bg--white">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nos Magasins</h2> </div>
			</div>
		</div>
		<div class="row space_bottom">
			<!-- Start Single Blog -->
			<div class="col-xl-4 col-lg-4 col-sm-6 col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/img/blog/blog-md1.jpg') }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<h3><a href="#">TENDANCE OPTIC SAINT-PIERRE</a></h3>
						<p class="">130 Rue Victor Hugo, 97250 Saint-Pierre
							<br/>Tél : <a href="tel:+0596 513225">0596 51.32.25</a></p>
					</div>
				</div>
			</div>
			<!-- End Single Blog -->
			<!-- Start Single Blog -->
			<div class="col-xl-4 col-lg-4 col-sm-6 col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/img/blog/blog-md2.jpg') }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<h3><a href="#">TENDANCE OPTIC LE LORRAIN</a></h3>
						<p class="">18 Rue Schoelcher, 97214 Le Lorrain
							<br/>Tél : <a href="tel:+0596 691890"> 0596 69.18.90</a></p>
					</div>
				</div>
			</div>
			<!-- End Single Blog -->
			<!-- Start Single Blog -->
			<div class="col-xl-4 col-lg-4 col-sm-6 col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/img/blog/blog-md3.jpg') }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<h3><a href="#">TENDANCE OPTIC GUYANE</a></h3> </div>
				</div>
			</div>
			<!-- End Single Blog -->
		</div>
	</div>
</div>
<!-- My Account Page -->
<div class="my-account-area section-ptb-xl bg-grey">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h2>Contactez-nous</h2>
					<p><strong> Saint-Pierre</strong> - 130 Rue Victor Hugo, <a href="tel:+0596 51.32.25">Tél : 0596 51.32.25</a> </p>
					<p><strong> Saint-Pierre</strong> - 130 Rue Victor Hugo, <a href="tel:+0596 51.32.25">Tél : 0596 51.32.25</a> </p>
				</div>
			</div>
		</div>
		<div class="row  justify-content-center">
			<!-- Register Form -->
			<div class="col-lg-10 md-mt--30 mt--15 sm-mt--30 ">
				@if (session()->has('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session()->get('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
				<div class="login-form-wrapper bg-white">
					<form id="contactSubmission" class="sn-form sn-form-boxed">
						@csrf
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Nom*</label>
									<input type="text" name="name" required> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Email*</label>
									<input type="email" name="email" required> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Téléphone</label>
									<input type="number" name="phone_number" required> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Magasins</label>
									<select id="template-contactform-service" name="service" class="sm-form-control" required>
										<option disalbed selected>-- Magasins --</option>
										<option value="Tendance Optic Bouillante">Tendance Optic Bouillante</option>
										<option value="Tendance Optic Le Lorrain">Tendance Optic Le Lorrain</option>
										<option value="Tendance Optic Pointe-à-Pitre">Tendance Optic Pointe-à-Pitre</option>
										<option value="Tendance Optic Sainte-Rose">Tendance Optic Sainte-Rose</option>
										<option value="Tendance Optic Saint-Pierre">Tendance Optic Saint-Pierre</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="billing-info">
									<label class="py-3">Objet du message*</label>
									<input type="text" name="object_name" required> </div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="billing-info">
									<label class="py-3">Message*</label>
									<textarea name="message" id="" cols="30" rows="5" required></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col justify-content-center text-center">
									<button class="place-order" type="submit" name="submit">Envoyer le message</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--// Register Form -->
		</div>
	</div>
</div>
<!--// My Account Page -->
@endsection
