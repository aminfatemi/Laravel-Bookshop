@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    @if(Session::has('cart'))
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-group">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                <span class="badge">Quantity: {{ $product['qty'] }}</span>
                                <a href="#"><strong>{{ $product['item']['title'] }}</strong></a>
                                <span class="label label-success">&euro; {{ $product['price'] }}</span>
                                <div class="btn-group">
                                    <ul class="nav navbar-nav ">
                                        <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}" class="glyphicon glyphicon-minus"></a></li>
                                        <li><a href="{{ route('product.addByOne', ['id' => $product['item']['id']]) }}" class="glyphicon glyphicon-plus"></a></li>
                                        <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}" class="glyphicon glyphicon-trash"></a></li>
                                    </ul>
                                </div>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total Price: &euro; {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-default btn-warning">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                @if(!Auth::check())
                    <h2>Dear Guest!</h2>
                    <a href="{{route('user.signup')}}" class="btn btn-default">Create an account!</a>
                    <a href="{{route('user.signin')}}" class="btn btn-primary">If you have an account, please sign in!</a>
                @else
                    <h2>Dear logged in user!</h2>
                @endif
                <h2>There are no Items in your Cart!</h2>

                <a href="{{route('product.index')}}" class="btn btn-default">Go to the products page!</a>
            </div>
        </div>
    @endif
@endsection