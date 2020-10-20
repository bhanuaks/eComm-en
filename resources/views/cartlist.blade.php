@extends('master')
@section("content")

<div class="custom-product">
    <!-- <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>  -->
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($products as $item)
                <div class="row serached-item cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                          </div>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-warning">Remove to cart </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</div>

@endsection