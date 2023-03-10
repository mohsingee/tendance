@extends('frontend.layouts.app')
@section('title','Indexopticien Page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Opticien Privé</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Opticien Privé</span> </nav>
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
					<h2>Besoin d'un RDV à domicile ?
                            </h2>
					<p>Nos opticiens se déplacent gratuitement sur le lieu de votre choix</p>
				</div>
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
									<label class="py-3">Prenom*</label>
									<input type="text" name="name"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Téléphone</label>
									<input type="number" name="phone_number"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Email*</label>
									<input type="email" name="email"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Je choisis ma région</label>
									<select id="template-contactform-service" name="region" class="sm-form-control">
										<option value="">Je choisis ma région</option>
										<option value="Région Guadeloup">Région Guadeloupe</option>
										<option value="Région Martinique">Région Martinique</option>
										<option value="Région Guyane">Région Guyane</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Je choisis ma commune</label>
									<select id="template-contactform-service" name="service" class="sm-form-control">
										<option value="">Je choisis ma commune</option>
										<!-- <option value="Tendance Optic Bouillante">Tendance Optic Bouillante</option>
                                                <option value="Tendance Optic Le Lorrain">Tendance Optic Le Lorrain</option>
                                                <option value="Tendance Optic Pointe-à-Pitre">Tendance Optic Pointe-à-Pitre</option>
                                                <option value="Tendance Optic Sainte-Rose">Tendance Optic Sainte-Rose</option>   
                                                <option value="Tendance Optic Saint-Pierre">Tendance Optic Saint-Pierre</option> -->
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col justify-content-center text-center ">
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