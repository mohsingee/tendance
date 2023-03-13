@extends('frontend.layouts.app')
@section('title','Brands Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Nos Marques</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Nos Marques</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- My Account Page -->
<div class="product_area bg-grey section-ptb-xl  ">
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
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/prada.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/diesel.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/johngaliano.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/christiandiorparis.jpg') }}" alt="product img"> </a>
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
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/prada.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/diesel.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/johngaliano.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
			<!-- Start Single Product -->
			<div class="col-lg-3 col-xl-3 col-sm-6 col-12">
				<div class="product">
					<div class="thumb">
						<a href="#"> <img src="{{ asset('assets/frontend/img/logo/christiandiorparis.jpg') }}" alt="product img"> </a>
					</div>
				</div>
			</div>
			<!-- End Single Product -->
		</div>
	</div>
</div>
<!--// My Account Page -->
@endsection
