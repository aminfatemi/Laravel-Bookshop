@extends('layouts.master')

@section('title')
    Book Store
@endsection

@section('content')
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif

    {{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
            {{--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
        {{--</ol>--}}
        {{--<div class="carousel-inner" role="listbox">--}}
            {{--<div class="carousel-item active">--}}
                {{--<img class="d-block img-fluid" src="..." alt="First slide">--}}
            {{--</div>--}}
            {{--<div class="carousel-item">--}}
                {{--<img class="d-block img-fluid" src="..." alt="Second slide">--}}
            {{--</div>--}}
            {{--<div class="carousel-item">--}}
                {{--<img class="d-block img-fluid" src="..." alt="Third slide">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
    {{--</div>--}}

    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product->imagePath }}" alt="..." class="img-responsive img-rounded">
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p class="description">{{ $product->description }}</p>
                            <div class="clearfix">
                                <div class="pull-left price">&euro; {{ $product->price }}</div>
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"
                                   class="btn btn-success pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection