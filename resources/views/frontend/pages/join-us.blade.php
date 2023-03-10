@extends('frontend.layouts.app')
@section('title','Login & Register Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Recrutement</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Recrutement</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<!-- My Account Page -->
<div class="my-account-area section-ptb-xl">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h2>Rejoignez nous</h2> </div>
			</div>
		</div>
		<div class="row  justify-content-center">
			<!-- Register Form -->
			<div class="col-lg-10 md-mt--30 mt--15 sm-mt--30 ">
				<div class="login-form-wrapper bg-white">
					<form action="#" class="sn-form sn-form-boxed">
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Nom*</label>
									<input type="text" name="name"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Email*</label>
									<input type="email" name="email"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Téléphone</label>
									<input type="number" name="phone_number"> </div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="billing-info">
									<label class="py-3">Objet du message*</label>
									<input type="text" name="object_name"> </div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="billing-info">
									<label class="py-3">Message*</label>
									<textarea name="message" id="" cols="30" rows="10"></textarea>
								</div>
							</div>
							<div class="row">
								<div class="col justify-content-center text-center">
									<button class="place-order" type="submi" name="submit">Postuler maintenant</button>
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