<!--extending layouts.main here-->
@extends('layouts.main')
<!--login section starts here-->
@section('login')
	<!--col-md-12 starts here-->
	<div class="col-md-12" style="height:70%; min-height:200px">
		@if(session('error'))
		<div class="alert alert-danger">
			{{session('error')}}
		</div>    
	@endif
		<!--container starts here-->
		<div class="container">
			<!--form starts here-->
			<form method="post" action="{{route('login-submission')}}">
				@csrf
				<!--table starts here-->
				<table class="table" style="width:150px; margin:40px auto">
					<tr>
						<td></td>
						<td style="color:#1C5978; font-weight:bold; text-align:center">Login</td>
					</tr>
					<tr>
						<td class="login-table-text">Username</td>
						<td><input type="text" class="login-table-input" name="username" required></td>
						<span class="text-danger">
							@error('username')
								{{$message}}
							@enderror
						</span>
					</tr>
					<tr style="border:none">
						<td class="login-table-text">Password</td>
						<td><input type="password" class="login-table-input" style="font-size:30px;height:25px" name="password" required></td>
						<span class="text-danger">
							@error('password')
								{{$message}}
							@enderror
						</span>
					</tr>
					<tr>
						<td></td>
						<td><input class="btn btn-sm btn-primary" type="submit" style="margin-left:60px; padding:2px 15px" name="login" value="Submit"/></td>
					</tr>
				</table>
				<!--table ends here-->
			</form>
			<!--form ends here-->
		</div>
		<!--container ends here-->
	</div>
	<!--col-md-12 ends here-->
@endsection
