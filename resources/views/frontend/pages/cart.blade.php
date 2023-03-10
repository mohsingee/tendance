@extends('frontend.layouts.app')
@section('title','Cart page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Cart</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Cart</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- Cart Page Start -->
<div class="cart_area pt--120 pb--80">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="#">
					<!-- Cart Table -->
					<div class="cart-table table-responsive mb--40">
						<table class="table">
							<thead>
								<tr>
									<th class="pro-thumbnail">Image</th>
									<th class="pro-title">Produit</th>
									<th class="pro-price">Prix</th>
									<th class="pro-quantity">Quantité</th>
									<th class="pro-subtotal">Total</th>
									<th class="pro-remove">Retirer</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="pro-thumbnail">
										<a href="#"><img src="{{ asset('assets/img/product/product-1.jpg') }}" alt="Product"></a>
									</td>
									<td class="pro-title"><a href="#">Rinosin Glasses</a></td>
									<td class="pro-price"><span>$395.00</span></td>
									<td class="pro-quantity">
										<div class="pro-qty">
											<input type="text" value="1">
										</div>
									</td>
									<td class="pro-subtotal"><span>$395.00</span></td>
									<td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
								</tr>
								<tr>
									<td class="pro-thumbnail">
										<a href="#"><img src="{{ asset('assets/img/product/product-2.jpg') }}" alt="Product"></a>
									</td>
									<td class="pro-title"><a href="#">Silacon Glasses</a></td>
									<td class="pro-price"><span>$275.00</span></td>
									<td class="pro-quantity">
										<div class="pro-qty">
											<input type="text" value="2">
										</div>
									</td>
									<td class="pro-subtotal"><span>$550.00</span></td>
									<td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
								</tr>
								<tr>
									<td class="pro-thumbnail">
										<a href="#"><img src="{{ asset('assets/img/product/product-3.jpg') }}" alt="Product"></a>
									</td>
									<td class="pro-title"><a href="#">Easin Glasses</a></td>
									<td class="pro-price"><span>$295.00</span></td>
									<td class="pro-quantity">
										<div class="pro-qty">
											<input type="text" value="1">
										</div>
									</td>
									<td class="pro-subtotal"><span>$295.00</span></td>
									<td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
								</tr>
								<tr>
									<td class="pro-thumbnail">
										<a href="#"><img src="{{ asset('assets/img/product/product-4.jpg') }}" alt="Product"></a>
									</td>
									<td class="pro-title"><a href="#">Macrox Glasses</a></td>
									<td class="pro-price"><span>$220.00</span></td>
									<td class="pro-quantity">
										<div class="pro-qty">
											<input type="text" value="1">
										</div>
									</td>
									<td class="pro-subtotal"><span>$220.00</span></td>
									<td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
				<div class="row">
					<div class="col-lg-6 col-12 mb--15">
						<!-- Calculate Shipping -->
						<div class="calculate-shipping">
							<h4>Calculer Frais de port</h4>
							<form action="#">
								<div class="row">
									<div class="col-md-6 col-12 mb--25">
										<select class="nice-select">
											<option>Bangladesh</option>
											<option>China</option>
											<option>country</option>
											<option>India</option>
											<option>Japan</option>
										</select>
									</div>
									<div class="col-md-6 col-12 mb--25">
										<select class="nice-select">
											<option>Dhaka</option>
											<option>Barisal</option>
											<option>Khulna</option>
											<option>Comilla</option>
											<option>Chittagong</option>
										</select>
									</div>
									<div class="col-md-6 col-12 mb--25">
										<input type="text" placeholder="Code postal"> </div>
									<div class="col-md-6 col-12 mb--25">
										<input type="submit" value="Estimation"> </div>
								</div>
							</form>
						</div>
						<!-- Discount Coupon -->
						<div class="discount-coupon">
							<h4>Code de bon de réduction</h4>
							<form action="#">
								<div class="row">
									<div class="col-md-6 col-12 mb--25">
										<input type="text" placeholder="Code promotionnel"> </div>
									<div class="col-md-6 col-12 mb--25">
										<input type="submit" value="Appliquer le code"> </div>
								</div>
							</form>
						</div>
					</div>
					<!-- Cart Summary -->
					<div class="col-lg-6 col-12 mb--40 d-flex">
						<div class="cart-summary">
							<div class="cart-summary-wrap">
								<h4>Résumé du panier</h4>
								<p>Sub Total <span>$1250.00</span></p>
								<p>Shipping Cost <span>$00.00</span></p>
								<h2>Grand Total <span>$1250.00</span></h2> </div>
							<div class="cart-summary-button">
								<button class="checkout-btn">Vérifier</button>
								<button class="update-btn">Update Cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cart Page End -->
@endsection