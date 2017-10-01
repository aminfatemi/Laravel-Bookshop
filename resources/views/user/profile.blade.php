@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>User Profile</h1>
            <hr>
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div>
                    <i>Purchase made on: {{$order->created_at}}</i>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="pull-right">&euro; {{ $item['price'] }}</span>
                                    <a href="#">{{ $item['item']['title'] }} </a>| {{ $item['qty'] }} Unit(s)
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <p>Total Price: <strong>&euro; {{ $order->cart->totalPrice }}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection