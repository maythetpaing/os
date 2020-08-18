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
								<th>Photo</th>
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
					<textarea class="form-control notes" placeholder="Your Notes Here"></textarea>
					<input type="hidden" name="" class="total">
				</div>
			</div>
			<div class="offset-md-2 col-md-3 text-left">
				<a href="{{route('homepage')}}" class="btn btn-primary">Continue Shopping</a>
			</div>
			{{-- <textarea class="from"></textarea> --}}
			<div class="offset-md-2 col-md-3 text-left">
				@role('customer')
					<button class="btn btn-primary buy_now buy_now">Checkout</button>
					@else
					<a href="{{route('login')}}" class="btn btn-primary float-right">Login To Checkout</a>
				@endrole
					
			</div>
		</div>
	</div>
</div>



@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection