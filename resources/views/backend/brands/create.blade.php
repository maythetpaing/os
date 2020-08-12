@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Create(Form)</h2>

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
		<form enctype="multipart/form-data" method="post" action="{{route('brands.store')}}">
			@csrf
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="photo" class="form-control-file">
			</div>
			
			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection