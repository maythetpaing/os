@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    <h2>Order Detail(Your UI)</h2>
    
        
        <div class="col-md-8 mt-5 offset-lg-3">
            <h3 class="text-center text-danger">Online Shopping</h3><hr>
            
            <h5>voucherno:{{$order->voucherno}}</h5><hr>
            <h5>orderdate:{{$order->updated_at}}</h5><hr>
            <h5>Casher:{{Auth::user()->name}}</h5>
           
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Item name</td>
                        <td>Price</td>
                        <td>qty</td>
                        <td>amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->items as $order1)
                    <tr>
                       <td>{{$order1->name}}</td>
                        <td>{{$order1->price}}</td>
                       <td>{{$order1->pivot->qty}}</td>
                        <td>{{$order1->price*$order1->pivot->qty}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                    <td colspan="3">Total amount</td>
                    <td>{{$order->total}}</td>
                </tr>
                </tfoot>
            </table>
            
            

            
        </div>
        
    
</div>
@endsection