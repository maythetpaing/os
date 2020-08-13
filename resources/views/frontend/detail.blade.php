@extends('frontendtemplate')
@section('content')
<div class="container-fluid m-5">
	<h2 class="text-center mb-5">Item Detail</h2>
	<div class="row">
		<div class="col-md-4">
			<p><img src="{{asset($items->photo)}}" class="img-fluid "></p>
		</div>
		<div class="col-md-8">
			
			<h5>Product Name:{{$items->name}}</h5><hr>
			<h5>Product Code:{{$items->codeno}}</h5><hr>
			<h5>Product Price:{{$items->price}}</h5><hr>
			<h5>Description:{{$items->description}}</h5><hr>
			<h5>Brand:{{$items->brand->name}}</h5><hr>
			<h5>Subcategory:{{$items->subcategory->name}}</h5>

			
		</div>
		
	</div>
</div>
@endsection