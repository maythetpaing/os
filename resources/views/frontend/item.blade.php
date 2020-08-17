@extends('frontendtemplate')
@section('content')
@section('sidebar')
@include('frontend.sidebar')
@endsection
<div class="row">
	<div class="col-lg-9">
		@foreach($subcategories as $subcategory)
		<h2>
			{{$subcategory->name}}
		</h2>
		@endforeach

		<div id="myItems" class="row">
			
			
		</div>
		




	</div>
</div>
@endsection
@section('script')
{{-- //ajax --}}
<script type="text/javascript">
	$(document).ready(function(){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		showItems(0);
		function showItems(id){


			$.post("{{route('getitems')}}",{sid:id},function(res){

			// console.log(res);
			var html='';
			$.each(res,function(i,v){
				var url='/detail/'+v.id;//for route in href
				html+=`<div class="col-lg-4 col-md-6 mb-4 mt-5">
				<div class="card h-100">
				<img src="${v.photo}" alt="" class="img-fluid">
				<div class="card-body">
				<h4 class="card-title">
				<a href="#">${v.name}</a>
				</h4>
				<h5>${v.price}</h5>
				<p class="card-text">${v.description}</p>
				</div>
				<div class="card-footer">
				<a href="#" class="btn btn-info btn-sm addtocart" data-id="${v.id}"
				data-name="${v.name}"
				data-photo=""
				data-price="${v.price}"
				data-discount="${v.price}">Add To Cart</a>
				<a href="${url}" class="btn btn-primary btn-sm">Detail</a>
				</div>
				</div>
				</div>`

			});
			$('#myItems').html(html);
		})
		};

		$('.filter').click(function(){
			var id=$(this).data('id');
			showItems(id);
		})
	});

</script>
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection