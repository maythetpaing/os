@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Edit(Form/old value)</h2>
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
		<form enctype="multipart/form-data" method="post" action="{{route('brands.update',$brand->id)}}">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="{{$brand->name}}">
			</div>
			<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="photo" class="form-control-file">
				<img src="{{asset($brand->photo)}}">
				<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
			</div>
			
			
			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection