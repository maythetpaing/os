@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create(Form)</h2>

	{{-- @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif --}}
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('items.store')}}">
			@csrf
			<div class="form-group">
				<label>Codeno:</label>
				<input type="text" name="codeno" class="form-control @error('codeno') is-invalid @enderror" id="codeno">
				@error('codeno')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>

			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
				@error('name')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="photo" class="form-control-file  @error('photo') is-invalid @enderror" id="photo">
				@error('photo')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror
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
						<input type="number" name="price" class="form-control  @error('price') is-invalid @enderror" id="price" placeholder ="Unit Price">
						@error('price')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror

					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="form-group">
						<input type="number" name="discount" class="form-control @error('discount') is-invalid @enderror" placeholder="Discount Price" id="discount">
						@error('discount')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>
				</div>

			</div>

			<div class="form-group">
				<label>Brand</label>
				<select name="brand" class="form-control @error('brand') is-invalid @enderror" id="brand">

					@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
					@endforeach
					@error('brand')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					



				</select>
			</div>
			<div class="form-group">
				<label>Subcategory</label>
				<select name="subcategory" class="form-control @error('subcategory') is-invalid @enderror" id="subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					@endforeach
					@error('subcategory')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
				</select>
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
				@error('description')
				<div class="alert alert-danger">{{ $message }}</div>
				@enderror

			</div>

			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection