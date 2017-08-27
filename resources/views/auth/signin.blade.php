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
				<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
			</div>
			<div class="panel-body">
				<form action="index.html" method="post">
					<div class="form-group mb-lg">
						<label>Username</label>
						<div class="input-group input-group-icon">
							<input name="username" type="text" class="form-control input-lg" />
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-user"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="form-group mb-lg">
						<div class="clearfix">
							<label class="pull-left">Password</label>
							<a href="pages-recover-password.html" class="pull-right">Lost Password?</a>
						</div>
						<div class="input-group input-group-icon">
							<input name="pwd" type="password" class="form-control input-lg" />
							<span class="input-group-addon">
								<span class="icon icon-lg">
									<i class="fa fa-lock"></i>
								</span>
							</span>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-8">
							<div class="checkbox-custom checkbox-default">
								<input id="RememberMe" name="rememberme" type="checkbox"/>
								<label for="RememberMe">Remember Me</label>
							</div>
						</div>
						<div class="col-sm-4 text-right">
							<a href="{{route('home')}}" type="submit" class="btn btn-primary hidden-xs">Sign In</a>
							<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
						</div>
					</div>
					<div class="row signin">
						<p class="text-center">Don't have an account yet? <a href="{{route('signup')}}">Sign Up!</a></p>
					</div>

				</form>
			</div>
		</div>
	</div>
</section>
@endsection