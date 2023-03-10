@extends('frontend.layouts.app')
@section('title','Clubtendance page')
@section('main-content')
<!-- Cart Overlay -->
<div class="body_overlay"></div>
<!-- Start Bradcaump area -->
<div class="bradcaump_area bg_image--4">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump_inner text-center">
					<h2 class="bradcaump-title">Club Tendance</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Club Tendance</span> </nav>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Bradcaump area -->
<div class="my-account-area section-ptb-xl">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h2>J'accède à mon espace personnel</h2> </div>
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
									<label class="py-3">Identifiant *</label>
									<input type="text" name="name"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Mot de Passe *</label>
									<input type="password" name="email"> </div>
							</div>
							<div class="row">
								<div class="col justify-content-center text-center ">
									<button class="place-order" type="submit" name="submit">Connexion</button>
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
<section class=" work_area bg-dark p-5">
	<div class="container">
		<div class="row g-0 align-items-center text-center">
			<div class="col-lg-12 col-12 ">
				<h2 class="">----- Or -----</h2> </div>
		</div>
	</div>
</section>
<!-- My Account Page -->
<div class="my-account-area section-ptb-xl">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h2>I become a member of the Tendance club</h2> </div>
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
									<label class="py-3">Prénom *</label>
									<input type="text" name="name"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Tél. Fixe *</label>
									<input type="number" name="phone_number"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Mobile *</label>
									<input type="number" name="phone_number"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Email*</label>
									<input type="email" name="email"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Adresse *</label>
									<input type="text" name="address"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Code Postal *</label>
									<input type="text" name="postal_code"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Ville *</label>
									<input type="text" name="city"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Parrain</label>
									<input type="text" name="object_name"> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Choisissez votre magasin</label>
									<select id="template-contactform-service" name="magasin" class="sm-form-control">
										<option value="">Choisissez votre magasin</option>
										<!-- <option value="Tendance Optic Bouillante">Tendance Optic Bouillante</option>
                                                <option value="Tendance Optic Le Lorrain">Tendance Optic Le Lorrain</option>
                                                <option value="Tendance Optic Pointe-à-Pitre">Tendance Optic Pointe-à-Pitre</option>
                                                <option value="Tendance Optic Sainte-Rose">Tendance Optic Sainte-Rose</option>   
                                                <option value="Tendance Optic Saint-Pierre">Tendance Optic Saint-Pierre</option> -->
									</select>
								</div>
							</div>
						</div>
						<div class="row py-4">
							<p>Afin de nous assurer que le compte créé est celui d'un utilisateur humain, nous vous demandons bien vouloir recopier le champs de sécurité suivant dans la zone ci-dessous: </p>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info pt-4 ms-5"> <img src="{{ asset('assets/img/banner/CaptchaSecurityImages.png') }}" class="py-3" alt=""> </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="billing-info">
									<label class="py-3">Captcha *</label>
									<input type="text" name="recaptcha"> </div>
							</div>
						</div>
						<div class="row">
							<div class="col justify-content-center text-center ">
								<button class="place-order" type="submit" name="submit">Envoyer le message</button>
							</div>
						</div>
					</form>
					<div class="row py-5">
						<div class="col-lg-12 col"> <strong>* Champs obligatoires

                                    </strong>
							<p>Conformément à la loi Information et Libertés du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et de suppression des données vous concernant.Vous pouvez l'exercer en vous adressant à Tendance Optic.</p>
						</div>
					</div>
				</div>
			</div>
			<!--// Register Form -->
		</div>
	</div>
</div>
<!--// My Account Page -->
@endsection