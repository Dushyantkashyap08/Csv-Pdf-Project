<!--extending layouts.main here-->
@extends('layouts.main')
<aside>
   <!--uploadImage starts here-->
	@section('uploadImage')

	<!--layouts.sidebar starts here-->
	@include('layouts.sidebar')
	<!--layouts.sidebar ends here--> 
   
	<!--col-md-10 starts here-->
	<div class="col-md-10 main-section">
	   <!--section starts here-->
		<section>
			<h3 style="font-size:16px; font-weight:bold; color:#1C5978; text-align:left;margin-left:0px;">Upload Image File</h3>
			<hr style="margin:0px; width:600px; margin-bottom:10px" />
			<div style=" background:#F3F1F1;border:1px solid silver; font: bold 13px/13px arial ;padding:5px 0px 5px 15px ">Upload Image File</div>
		   <!--div starts here-->
			<div>
			   <!--form starts here-->
			   <form id="uploadForm" method="post" action="insertImageProcess.php" enctype="multipart/form-data">
				   <!--table starts here-->
				   <table class="addpage-table">
					   <tr>
						   <td>Upload Image</td>
						   <td>
							   <input type="file" name="csv_file" id="csv_file" accept=".csv"> 
						   </td>
					   </tr>
					   <tr>
						   <td></td>
						   <td colspan="2">
							   <button class="srchbtn" type="submit" >Upload Images</button>    
						   </td>
					   </tr>
				   </table>
				   <!--table ends here-->
			   </form>
			   <!--form ends here-->
		   </div>
		   <!--div ends here-->
	   </section>
	   <!--section ends here-->
   </div>
   <!--col-md-10 ends here-->
</aside>
@endsection
<!--section ends here-->
