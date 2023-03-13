@extends('frontend.layouts.app')
@section('title','Shop detail Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">détail de la boutique</h2>
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
					<h2>{{ $shop->title }}</h2> </div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-8  col-12 ">
				<div class="blog">
					<div class="blog__thumb">
						<a href="#"> <img src="{{ asset('assets/shop/'.$shop->image) }}" alt="blog img"> </a>
					</div>
					<div class="blog__content">
						<p class="">Price: ${{ $shop->price }}</p>
                        <p>{{ $shop->description }}</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<!--// My Account Page -->
@endsection
