@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<div class="container my-3">
    <div class="carousel slide my-3" id="carouselExampleIndicators" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="http://placehold.it/900x350" class="d-block img-fluid" alt="First slide">
          
        </div>
        <div class="carousel-item">
        	 <img src="http://placehold.it/900x350" class="d-block img-fluid" alt="First slide">
          
          
        </div>
        <div class="carousel-item">
           <img src="http://placehold.it/900x350" class="d-block img-fluid" alt="First slide">
          
        </div>
      </div>
    </div>
  </div>

	

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
					<a href="#" class="btn btn-info btn-sm addtocart" data-id="{{$item->id}}"
						data-name="{{$item->name}}"
						data-photo="{{asset($item->photo)}}"
						data-price="{{$item->price}}"
						data-discount="{{$item->discount}}">Add To Cart</a>
					<a href="{{route('detailpage',$item->id)}}" class="btn btn-primary btn-sm">Detail</a>
				</div>
			</div>
		</div>
		@endforeach



	</div>
	<!-- /.row -->

</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection