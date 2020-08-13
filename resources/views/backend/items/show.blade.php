@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail(Your UI)</h2>
	<div class="row">
		<div class="col-md-4">
			<p><img src="{{asset($item->photo)}}" class="img-fluid "></p>
		</div>
		<div class="col-md-8">
			
			<h5>Product Name:{{$item->name}}</h5><hr>
			<h5>Product Code:{{$item->codeno}}</h5><hr>
			<h5>Product Price:{{$item->price}}</h5><hr>
			<h5>Description:{{$item->description}}</h5><hr>
			
		</div>
		
	</div>
</div>
@endsection