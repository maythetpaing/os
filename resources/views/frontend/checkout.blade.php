@extends('frontendtemplate')
@section('content')

<div id="checkout_body">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3">Check Out</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>

			<!-- Table -->
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<textarea class="form-control notes" placeholder="Notes"></textarea>
					<input type="hidden" name="" class="total">
				</div>
			</div>
			<div class="offset-md-2 col-md-3 text-left">
				<a href="" class="btn btn-primary">Continue Shopping</a>
			</div>
			<div class="offset-md-2 col-md-3 text-left">
				
					<button class="btn btn-primary buy_now">Buy Now</button>
					
			</div>
		</div>
	</div>
</div>
<nav aria-label="Page navigation example" class="text-center mt-4">
	<ul class="pagination pagination justify-content-center">
		<li class="page-item">
			<a class="page-link" href="index.html"  tabindex="-1"  aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="">1</a></li>
		<li class="page-item"><a class="page-link" href="">2</a></li>
		<li class="page-item"><a class="page-link" href="">3</a></li>
		<li class="page-item"><a class="page-link" href="">4</a></li>
		<li class="page-item"><a class="page-link" href="">5</a></li>
		
		<li class="page-item">
			<a class="page-link" href="" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>


@endsection