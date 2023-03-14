@extends('frontend.layouts.app')
@section('title','Shop Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Essayage</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Essayage</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Start Shop Area -->
<div class="shop_area section-ptb-xl bg--white">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-12 order-2 order-lg-1 sm-mt--30 md-mt--30">
				<div class="shop_sidebar">
					<!-- Start Single Wedget -->
					<div class="sidebar_widget search mb--60">
						<h2 class="sidebar_title">Recherche</h2>
						<div class="sidebar_search">
							<form action="#">
								<input type="text" placeholder="Search for:">
								<button type="submit"><i class="ti-search"></i></button>
							</form>
						</div>
					</div>
					<!-- End Single Wedget -->
					<!-- Start Single Wedget -->
					<div class="sidebar_widget widget_price_filter mb--60">
						<h2 class="sidebar_title">Filter</h2>
						<div class="sidebar_filter">
							<div class="nstSlider" data-range_min="0" data-range_max="100" data-cur_min="10" data-cur_max="80">
								<div class="bar"></div>
								<div class="leftGrip"></div>
								<div class="rightGrip"></div>
							</div>
							<div class="leftLabel"></div>
							<div class="rightLabel"></div>
						</div>
					</div>
					<!-- End Single Wedget -->
					<!-- Start Single Wedget -->
					<div class="sidebar_widget widget_categories mb--60">
						<h2 class="sidebar_title">Categories</h2>
						<ul class="sidebar_categories">
							<li><a href="#">Accessories <span>(01)</span></a></li>
							<li><a href="#">All <span>(01)</span></a></li>
							<li><a href="#">Anthologies <span>(01)</span></a></li>
							<li><a href="#">bestproduct <span>(01)</span></a></li>
							<li><a href="#">Corner <span>60</span></a></li>
						</ul>
					</div>
					<!-- End Single Wedget -->
					<!-- Start Single Wedget -->
					<div class="sidebar_widget widget_banner mb--60">
						<div class="sidebar_banner">
							<a href="#"><img src="{{ asset('assets/frontend/img/banner/sidebar-banner.png') }}" alt="sidebar banner"></a>
						</div>
					</div>
					<!-- End Single Wedget -->
					<!-- Start Single Wedget -->
					<div class="sidebar_widget widget_tag">
						<h2 class="sidebar_title">Tags</h2>
						<ul class="sidebar_tag">
							<li><a href="#">Anthologies</a></li>
							<li><a href="#">Art</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Anthologies</a></li>
							<li><a href="#">Watch</a></li>
						</ul>
					</div>
					<!-- End Single Wedget -->
				</div>
			</div>
			<div class="col-lg-9 col-12 order-1 order-lg-2">
				<div class="shop_product_area">
					<div class="shop-bar-area">
						<div class="shop-filter-tab">
							<div class="view_mode justify-content-center nav" role="tablist">
								<a class="active" href="#tab1" data-bs-toggle="tab"> <i class="ti-layout-grid4-alt"></i></a> <a class="" href="#tab2" data-bs-toggle="tab"><i class="ti-list"></i></a> </div>
						</div>
						<div class="shop-found-selector">
							<p>Showing 1–{{ count($shops) }} of {{ $count }} results</p>
						</div>
					</div>
					<div class="tab_content">
						<div class="row single_grid_product tab-pane fade show active" id="tab1" role="tabpanel">
							@foreach ($shops as $shop)
							<div class="col-lg-6 col-xl-4 col-sm-6 col-12">
								<div class="product">
									<div class="thumb">
										<a href="{{ route('shop-detail',$shop->id) }}"> <img src="{{ asset('assets/shop/'.$shop->image) }}" alt="product img"> </a>
										<div class="product_action">
											<h4><a href="{{ route('shop-detail',$shop->id) }}">{{ $shop->title }}</a></h4>
											<ul class="cart_action">
												<li>
													<a href="javascript:void(0);"><img src="{{ asset('assets/frontend/img/icons/wishlist_icon.png') }}" alt="icons" onclick="addWishlist({{ $shop->id }})"></a>
												</li>
											</ul>
										</div>
										<div class="content">
											<h4><a href="{{ route('shop-detail',$shop->id) }}">{{ $shop->title }}</a></h4>
											<ul class="price">
												<li>${{ $shop->price }}</li>
												@if($shop->discounted>0)
												<li class="old-price">${{ $shop->discounted }}</li>
												@endif
											</ul>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="row single_grid_product tab-pane fade" id="tab2" role="tabpanel">
							@foreach ($shops as $shop)
							<div class="col-12">
								<div class="product_list">
									<div class="product_list__thumb">
										<a href="{{ route('shop-detail',$shop->id) }}"> <img src="{{ asset('assets/shop/'.$shop->image) }}" alt="product img"> </a>
									</div>
									<div class="product_list__content">
										<h4><a href="{{ route('shop-detail',$shop->id) }}">{{ $shop->title }}</a></h4>
										<ul class="price">
											<li>${{ $shop->price }}</li>
											@if($shop->discounted>0)
											<li class="old-price">${{ $shop->discounted }}</li>
											@endif
										</ul>
										<p>{{ $shop->description }}</p>
										<ul class="cart_action">
											<li>
												<a href="javascript:void(0);"><img src="{{ asset('assets/frontend/img/icons/wishlist_icon.png') }}" alt="icons" onclick="addWishlist({{ $shop->id }})"></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach						
						</div>
					</div>
					{{-- <ul class="pagination_style">
						<li><a class="active" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="ti-angle-right"></i></a></li>
					</ul> --}}
					<div class="pagination_style">
						<div class="table-responsive">{!! $shops->links() !!}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Shop Area -->
@endsection
