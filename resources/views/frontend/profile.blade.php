@extends('frontendtemplate')
@section('content')



<div class="row">
	<div class="col-lg-9">
		<h3 class="text-center">Profile Page</h3>
		{{-- {{ Auth::user()->name }} --}}
	

@csrf
<form class="m-5 form-group">
	Name:<input type="text" name="name" required="required" value="{{Auth::user()->name}}"><br><br>
	Email:<input type="email" name="email" required="required" value="{{Auth::user()->email}}" readonly="readonly"><br><br>
	Phone:<input type="phone" name="phone" value=""><br><br>
	Address:<input type="text" name="address" value=""><br><br>
	Password:<input type="password" name="password"><br><br>
	<input type="submit" name="update" value="update"><br><br>
	<a href="{{route('logout')}}">Logout</a>&nbsp;&nbsp;&nbsp;
	<a href="">Delete Account</a>
</form>
</div>
</div>
@endsection