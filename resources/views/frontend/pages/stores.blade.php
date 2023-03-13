@extends('frontend.layouts.app')
@section('title','Stores Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Nos Magasins</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Nos Magasins</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- My Account Page -->
<div class="blog_area section-pt-xl bg--white">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section_title text-center">
					<h2>Nos Magasins</h2> </div>
			</div>
		</div>
		<div class="row justify-content-center">
			<!-- Start Single Blog -->
			<div class="col-xl-8 col-lg-8  col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/blog/blog-md1.jpg') }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<h3><a href="#">TENDANCE OPTIC SAINT-PIERRE</a></h3>
						<p class="">130 Rue Victor Hugo, 97250 Saint-Pierre
							<br/>Tél : <a href="tel:+0596 513225">0596 51.32.25</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row space_bottom py-5 justify-content-center">
			<!-- End Single Blog -->
			<!-- Start Single Blog -->
			<div class="col-xl-8 col-lg-8 col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/blog/blog-md2.jpg') }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<h3><a href="#">TENDANCE OPTIC LE LORRAIN</a></h3>
						<p class="">18 Rue Schoelcher, 97214 Le Lorrain
							<br/>Tél : <a href="tel:+0596 691890"> 0596 69.18.90</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-5 justify-content-center">
			<!-- End Single Blog -->
			<!-- Start Single Blog -->
			<div class="col-xl-8 col-lg-8 col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/blog/blog-md3.jpg') }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<h3><a href="#">TENDANCE OPTIC GUYANE</a></h3> </div>
				</div>
			</div>
			<!-- End Single Blog -->
		</div>
	</div>
</div>
<!--// My Account Page -->
@endsection
