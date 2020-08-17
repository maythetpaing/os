@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Categories Create(Form)</h2>

	
	<div class="offset-md-2 col-md-8">
		<form enctype="multipart/form-data" method="post" action="{{route('categories.store')}}">
			@csrf
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name">
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
			
			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection