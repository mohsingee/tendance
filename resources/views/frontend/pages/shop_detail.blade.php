@extends('frontend.layouts.app')
@section('title','Shop detail Page')
@section('main-content')
<style>
.single_product {
  padding-top: 66px;
  padding-bottom: 140px;
  margin-top: 0px;
  padding: 17px;
}
.product_name {
  font-size: 20px;
  font-weight: 600;
  margin-top: 0px;
}
.product_price {
  display: inline-block;
  font-size: 30px;
  font-weight: 500;
  margin-top: 9px;
  clear: left;
}
.singleline {
  margin-top: 1rem;
  margin-bottom: 0.4rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.product_options {
  margin-bottom: 10px;
}
.product_description {
  padding-left: 0px;
}
.order_info {
  margin-top: 18px;
}
.shop-button {
  height: 47px;
}
@media (max-width: 390px) {
  .product_fav {
    display: none;
  }
}
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900");
.single_product {
  padding-top: 16px;
  padding-bottom: 140px;
}
.image_selected {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: calc(100% + 15px);
  height: 525px;
  -webkit-transform: translateX(-15px);
  -moz-transform: translateX(-15px);
  -ms-transform: translateX(-15px);
  -o-transform: translateX(-15px);
  transform: translateX(-15px);
  border: solid 1px #e8e8e8;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  padding: 15px;
}
.image_selected img {
  max-width: 100%;
}
.order_info {
  margin-top: 16px;
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
					<h2 class="bradcaump-title">détail de la boutique</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Nos Magasins</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="super_container">
    <div class="single_product">
        <div class="container-fluid">
            <div class="row">
				<div class="col-lg-1"></div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected"><img src="{{ asset('assets/shop/'.$shop->image) }}" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <div class="product_name">{{ $shop->title }}</div>
						<br>
                        <p>{{ $shop->description }}</p>
						<div> <span class="product_price">${{ $shop->price }}</span></div>
                        <hr class="singleline">
                        <div class="row">
                            <div class="col-xs-6"> 
								<button type="button" onclick="addWishlist({{ $shop->id }})" class="btn btn-primary shop-button">Add to Wishlist</button> 
								<a href="{{ route('try-image',$shop->id) }}" class="btn btn-success shop-button">Try Image</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
