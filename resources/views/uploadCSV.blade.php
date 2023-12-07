<!--extending layouts.main here-->
@extends('layouts.main') 

<!--uploadCSV starts here-->
@section('uploadCSV')

	<aside>
		<!--layouts.sidebar starts here-->
		@include('layouts.sidebar')
		<!--layouts.sidebar starts here-->

		<!--col-md-10 starts here-->
		<div class="col-md-10 main-section">
			<!--section starts here-->
			<section>
				<h3 style="font-size:16px; font-weight:bold; color:#1C5978; text-align:left;margin-left:0px;">Upload Csv</h3>
				<hr style="margin:0px; width:600px; margin-bottom:10px" />
				<div style=" background:#F3F1F1;border:1px solid silver; font: bold 13px/13px arial ;padding:5px 0px 5px 15px ">Upload Csv File</div>
				<!--div starts here-->
				<div>
					<!--form starts here-->
					<form action="" method="post" enctype="multipart/form-data">
						@csrf
						<!--table starts here-->
						<table class="addpage-table">
							<tr>
								<td>Upload Csv</td>
								<td>
									<input type="file" name="csv_file" id="csvFile" accept=".csv"> 
								</td>
							</tr>
							<tr>
								<td>Options</td>
								<td>
									Sku  <input type="checkbox" name="sku" id="sku" accept=".csv" checked> <br>
									Qty  <input type="checkbox" name="qty" id="qty" accept=".csv"> <br>
									Order Id  <input type="checkbox" name="orderId" id="orderId" accept=".csv"> <br>
									Order Notes <input type="checkbox" name="orderNotes" id="orderNotes" accept=".csv"> <br>
									Invoice Number  <input type="checkbox" name="invoiceNumber" id="invoiceNumber" accept=".csv"> 
								</td>
							</tr>
							<tr>
								<td></td>
								<td colspan="2">
									<button class="srchbtn" type="submit">Generate Pdf</button>    
									<button class="srchbtn" type="submit">Download Images</button>    
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
