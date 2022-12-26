<!DOCTYPE html>
<html lang="en">
    @include('layout/head-script')
	<style>
		div#Footer-content{
			position: absolute;
			right: 0;
			bottom: 0;
			left: 0;
		}
	</style>
<body>
    @include('layout/header',array('user'=>'admin'))
    @include('layout/breadcrumbs-and-year' ,array('breadcrumbs'=>array(
            'link'=> array('/admin','/admin/manage-user'),
            'text'=> array('admin','manage-user')
        )))



@section('content')
<main id="content" role="main" class="w-full  max-w-lg mx-auto p-6">

	<div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
		<h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
			Change Password
		</h2>

		<form action="{{route('post.reset-code',$reset_code)}}" method="POST" class="mt-4 space-y-4 lg:mt-5 md:space-y-5 auth-form"  id="reset_password_form">
			@csrf
			<div class="form-group">
				<label for="email">Email address</label>
				<input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				@if($errors->any('email'))
					<span class="text-danger">{{$errors->first('email')}}</span>
				@endif
			</div>
			<div class="form-group">
				<label for="password">New Password</label>
				<input type="password" class="form-control" name="password" autocomplete="false" id="password" placeholder="New Password">
				<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-eye_password cursor-pointer"></span>
				@if($errors->any('password'))
					<span class="text-danger">{{$errors->first('password')}}</span>
				@endif
			</div>

			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input type="password" class="form-control" name="confirm_password" autocomplete="false" id="confirm_password" placeholder="Confirm Password">
				<span toggle="#confirm_password" class="fa fa-fw fa-eye field-icon toggle-eye_password cursor-pointer"></span>
				@if($errors->any('confirm_password'))
					<span class="text-danger">{{$errors->first('confirm_password')}}</span>
				@endif
			</div>

			<div><button type="submit" class="btn btn-primary mt-2">Submit</button></div>
		</form>	
		</div>


</main>





<div id="Footer-content">
    @include('layout/footer')
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <style>
	.field-icon {
		float: right;
		margin-left: 0;
		margin-top: -25px;
		position: relative;
		z-index: 2;
		margin-right: 1rem;
	}
	</style>

	<script>
		$(".toggle-eye_password").click(function() {
			$(this).toggleClass("fa-eye fa-eye-slash");
			var input = $(this).parent().find($($(this).attr("toggle")));
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	</script>
</body>
</html>