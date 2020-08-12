@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Subcategory Create(Form)</h2>

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
		<form enctype="multipart/form-data" method="post" action="{{route('subcategories.store')}}">
			@csrf
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control">
			</div>
			
			
			
			
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
					
				</select>
			</div>
			

			<input type="submit" value="save" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection