@extends('frontend.layouts.app')
@section('title','Try Image')
@section('main-content')
<style>
    @media (min-width:320px)  { /* smartphones, portrait iPhone, portrait 480x320 phones (Android) */ }
    @media (min-width:480px)  { /* smartphones, Android phones, landscape iPhone */ }
    @media (min-width:600px)  { /* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android) */ }
    @media (min-width:801px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */ }
    @media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ }
    @media (min-width:1281px) { /* hi-res laptops and desktops */ }
    #my-fitmix-container {
	 	width : 660px; /* Change to desired width */
	 	height : 560px; /* Change to desired height */
	}

    body{
        font-family: "Times New Roman", Georgia, Serif !important;
    }

    #fb-vto-fitlive-detection-guide, #fb-vto-fitlive-detection-analysis {
        background-image: url(img/guide.svg) !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        position: absolute !important;
        left: 28% !important;
        bottom: 28% !important;
        right: 28% !important;
        top: 28% !important;
        background-size: contain !important;
	}	
</style>
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Try image</h2>
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
		<div id="my-fitmix-container"></div>
        <button type="button" onClick=getSnapshot() id="btn"> Get Snapshot </button>
        <iframe width="100%" height="1000px" id="popup" style="border: 0" allow="camera" > </iframe>
	</div>
</div>
<!--// My Account Page -->
@endsection