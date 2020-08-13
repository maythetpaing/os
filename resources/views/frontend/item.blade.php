@extends('frontendtemplate')
@section('content')
<div class="row">
	<div class="col-lg-9">
		<h2>Item Page Filter</h2>
		<div class="row">
		@foreach($items as $item)

		<div class="col-lg-4 col-md-6 mb-4 mt-5">
			<div class="card h-100">
				<img src="{{asset($item->photo)}}" alt="" class="img-fluid">
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">{{$item->name}}</a>
					</h4>
					<h5>{{$item->price}}</h5>
					<p class="card-text">{{$item->description}}</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info btn-sm">Add To Cart</a>
					<a href="{{route('detailpage',$item->id)}}" class="btn btn-primary btn-sm">Detail</a>
				</div>
			</div>
		</div>
		@endforeach



	</div>
	</div>
</div>
@endsection