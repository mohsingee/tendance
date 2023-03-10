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
					<h2 class="bradcaump-title">Account</h2>
					<nav class="bradcaump-content"> <a class="breadcrumb_item" href="{{ route('/') }}">accueil</a> <span class="brd-separetor">/</span> <span class="breadcrumb_item active">Login-Register</span> </nav>
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
			<!-- Login Form -->
			<div class="col-lg-6">
				<div class="login-form-wrapper">
					<h3>Connexion</h3>
					<form action="#" class="sn-form sn-form-boxed">
						<div class="sn-form-inner">
							<div class="single-input">
								<label for="login-form-email">Nom d'utilisateur ou adresse e-mail *</label>
								<input type="text" name="login-form-email" id="login-form-email"> </div>
							<div class="single-input">
								<label for="login-form-password">Password *</label>
								<input type="password" name="login-form-password" id="login-form-password"> </div>
							<div class="single-input">
								<button type="submit" class="mr-3"> <span>Connexion</span> </button>
								<div class="checkbox-input">
									<input type="checkbox" name="login-form-remember" id="login-form-remember">
									<label for="login-form-remember">Souviens-toi de moi</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--// Login Form -->
			<!-- Register Form -->
			<div class="col-lg-6 md-mt--30 sm-mt--30">
				@if (session()->has('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session()->get('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				@endif
				<div class="login-form-wrapper">
					<h3>Enregistrer</h3>
					<form id="userRegister" class="sn-form sn-form-boxed">
						@csrf
						<div class="sn-form-inner">
							<div class="single-input">
								<label for="register-form-name">Nom d'utilisateur*</label>
								<input type="text" name="name" id="register-form-name" required> </div>
							<div class="single-input">
								<label for="register-form-email">Adresse e-mail*</label>
								<input type="email" name="email" id="register-form-email" required> </div>
							<div class="single-input">
								<label for="register-form-password">Password*</label>
								<input type="password" name="password" id="register-form-password" required> </div>
							<div class="single-input">
								<button type="submit"> <span>Enregistrer</span> </button>
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