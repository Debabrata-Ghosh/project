@extends('layoutpart.masterlayout')
@section('title')
Sign In
@endsection
@section('mainbody')
<section class="body-sign">
	<div class="center-sign">
		<a href="/" class="logo pull-left">
			<img src="assets/images/logo1.png" height="54" alt="Porto Admin" />
		</a>

		<div class="panel panel-sign">
			<div class="panel-title-sign mt-xl text-right">
				<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
			</div>
			<div class="panel-body">
				<form>
					<div class="form-group mb-lg">
						<label>Name</label>
						<input name="name" type="text" class="form-control input-lg" />
					</div>

					<div class="form-group mb-lg">
						<label>E-mail Address</label>
						<input name="email" type="email" class="form-control input-lg" />
					</div>

					<div class="form-group mb-none">
						<div class="row">
							<div class="col-sm-6 mb-lg">
								<label>Password</label>
								<input name="pwd" type="password" class="form-control input-lg" />
							</div>
							<div class="col-sm-6 mb-lg">
								<label>Password Confirmation</label>
								<input name="pwd_confirm" type="password" class="form-control input-lg" />
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-8">
							<div class="checkbox-custom checkbox-default">
								<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
								<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
							</div>
						</div>
						<div class="col-sm-4 text-right">
							<button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
						</div>
					</div>

					<div class="row signin">
						<p class="text-center">Already have an account? <a href="{{route('signin')}}">Sign In!</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection