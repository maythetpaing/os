@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Subcategory Create(Form)</h2>

	
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('subcategories.store')}}">
			@csrf
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name">
				@error('name')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
			</div>
			
			
			
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control @error('category') is-invalid @enderror" id="category">

					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
					@error('category')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					



				</select>
			</div>
			

			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection