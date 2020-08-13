@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Edit(Form/old value)</h2>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('items.update',$item->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Codeno:</label>
				<input type="text" name="codeno" class="form-control" value="{{$item->codeno}}" readonly="readonly">
			</div>
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="{{$item->name}}">
			</div>
			<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="photo" class="form-control-file">
				<img src="{{asset($item->photo)}}">
				<input type="hidden" name="oldphoto" value="{{$item->photo}}">
			</div>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
				</li>

			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="form-group">
						<input type="number" name="price" class="form-control" placeholder ="Unit Price" value="{{$item->price}}">
					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="form-group">
						<input type="number" name="discount" class="form-control" placeholder="Discount Price" value="{{$item->discount}}">
					</div>
				</div>

			</div>

			<div class="form-group">
				<label>Brand</label>
				<select name="brand" class="form-control">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}"
						@if($brand->id==$item->brand_id)
						{{'selected'}}
						@endif
						>
						{{$brand->name}}</option>
					@endforeach
					



				</select>
			</div>
			<div class="form-group">
				<label>Subcategory</label>
				<select name="subcategory" class="form-control">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}"
					@if($subcategory->id==$item->subcategory_id)
						{{'selected'}} 
						@endif
						>{{$subcategory->name}}</option>
					@endforeach
					
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="description" >{{$item->description}}</textarea>
			</div>

			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection