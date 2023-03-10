@extends('frontend.layouts.app')
@section('title','Offers Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Nos Offres</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Nos Offres</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- My Account Page -->
<div class="product_area section-ptb-xl  ">
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
<!--// My Account Page -->
@endsection