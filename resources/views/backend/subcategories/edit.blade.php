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
		<form enctype="multipart/form-data" method="post" action="{{route('subcategories.update',$subcategories->id)}}">
			@csrf
			@method('PUT')
			
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="{{$subcategories->name}}">
			</div>
			<div class="form-group">
				<label>Category</label>
				<select name="category" class="form-control">
					@foreach($categories as $category)
					<option value="{{$category->id}}"
						@if($category->id==$subcategories->category_id)
						{{'selected'}}
						@endif
						>
						{{$category->name}}</option>
					@endforeach
					



				</select>
			</div>
			
			
			<input type="submit" value="Update" class="btn btn-outline-primary">


		</form>
	</div>
</div>
@endsection