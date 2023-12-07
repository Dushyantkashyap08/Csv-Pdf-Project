<!--extending layouts.main here-->
@extends('layouts.main')
<aside>
	<!--changePassword starts here-->
	@section('changePassword')

	<!--layouts.sidebar starts here-->
	@include('layouts.sidebar')
	<!--layouts.sidebar ends here-->

	<!--main section starts here-->
	<div class="col-md-10 main-section">
		@if(session('success'))
			<div class="alert alert-success">
				{{session('success')}}
			</div>    
			@else
			<div class="alert alert-danger">
				{{session('error')}}
			</div>    
		@endif
		<!--section starts here-->
		<section>
			<h3 style="font-size:16px; font-weight:bold; color:#1C5978; text-align:left;margin-left:0px;">Change Password</h3>
			<hr style="margin:0px; width:600px; margin-bottom:10px" />
			<div style=" background:#F3F1F1;border:1px solid silver; font: bold 13px/13px arial ;padding:5px 0px 5px 15px ">Change Password</div>
			<!--div starts here-->
			<div>
				<!--form starts here-->
				<form method="post" action="{{route('change-Password')}}">
					@csrf
					<!--addpage-table starts here-->
					<table class="addpage-table">
						<tr>
							<td>Old Password</td>
							<td>
								<input type="password" name="oldPassword" id="oldPassword" required> 
							</td>
						</tr>
						<tr>
							<td>New Password</td>
							<td>
								<input type="password" name="newPassword" id="newPassword" required> 
							</td>
						</tr>
						<tr>
							<td>Confirm New Password</td>
							<td>
								<input type="password" name="cNewPassword" id="cNewPassword" required> 
							</td>
						</tr>
						<tr>
							<td></td>
							<td colspan="2" >
								<input type="submit" class="srchbtn" name="save" value="Save"/>	
							</td>
						</tr>
					</table>
					<!--addpage-table ends here-->
				</form>
				<!--form ends here-->
			</div>
			<!--div ends here-->
		</section>
		<!--section ends here-->
	</div>
	<!--main section ends here-->
</aside>
@endsection
<!--section ends here-->
