@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Order List(Table)</h2>
	<a href="{{route('orders.create')}}" class="btn btn-success float-right">Add Order</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Voucherno</th>
				<th>Order Date</th>
				<th>Total</th>
				<th>Note</th>
				<th>User</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($orders as $order)
			<tr>
				<td>{{$i++}}</td>
				<td>
				{{$order->voucherno}}
				

				
			</td>
				<td>{{$order->orderdate}}</td>
				<td>{{$order->total}}MMK</td>
				<td>{{$order->note}}</td>
				<td>{{$order->user->name}}</td>
				<td>
					<a href="" class="btn btn-warning">Detail</a>
					
					
				</td>
			</tr>
			@endforeach()
		</tbody>
	</table>
</div>
{{-- detail modal --}}


@endsection