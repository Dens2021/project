@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col col-10">
            <div class=""><center>Products
                @if(Auth::user()->is_admin)
                    <a href="/create-product"
                       class="btn btn-outline-dark btn-sm create-product">Add product</a>
            @endif
                </center></div>
            @foreach($products as $product)
                    @php
                        $image = '';
                        if (count($product->images) > 0){
                            $image = $product->images[0]['file_path'];
                        } else {
                            $image = 'images/no-image.png';
                        }
                    @endphp
                    <div class="product_image" style="padding-top:20px"><center><a href="/product/{{$product->id}}"><img src="{{$image}}" width="500px"></a></center></div>
                    <div class="product_content">
                        <center>
                            <div class="product_title"><a href="/product/{{$product->id}}">{{$product->title}}</a></div>
                            <div class="product_price">${{$product->price}}</div>
                            <div class="button">
                                <a href=""
                                   data-product-id="{{$product->id}}"
                                   class="btn btn-success btn-sm add-to-cart">Buy</a>
                                @if(Auth::user()->is_admin)
                                    <a href="/products/{{$product->id}}/add-images"
                                       class="btn btn-success btn-sm add-image">Add image</a>
                                    <a href="/products/{{$product->id}}/delete"
                                       class="btn btn-success btn-sm add-image">Delete</a>
                                @endif
                            </div>
                        </center>
                    </div>
            @endforeach
            </table>
            <div class="d-flex justify-content-center" style="padding-top:20px">
                {!! $products->links() !!}
            </div>
        </div>
        <div class="col col-sm-2">
            <div class=""><a href="/my-cart">Cart</a></div>
            <table id="products-cart" class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            @foreach($cart as $cartItem)
                <tr data-id="{{$cartItem->id}}">
                    <td>{{$cartItem->product->title}}</td>
                    <td class="quantity">{{$cartItem->quantity}}</td>
                    <td class="price">${{$cartItem->quantity * $cartItem->product->price}}</td>
                </tr>
            @endforeach
            </table>
            <div class="d-flex justify-content-center">
                {!! $cart->links() !!}
            </div>
        </div>
    </div>
@stop
