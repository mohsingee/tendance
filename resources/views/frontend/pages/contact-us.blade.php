@extends('frontend.layouts.app')
@section('title','Contact us')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Contactez-nous</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Contactez-nous</span> </nav>
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