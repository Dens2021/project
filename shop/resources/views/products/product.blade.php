@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col col-10">
            <h1>{{$product->title}}</h1>
            <p>Price $<b>{{$product->price}} </b></p>
           @foreach($product->images as $image)
               <img src="{{$image->file_path}}" alt="{{$product->title}}" width="200px" >
            @endforeach
            <p>{{$product->description}}</p>


                <a href=""
                   data-product-id="{{$product->id}}"
                   class="btn btn-success btn-sm add-to-cart">Buy</a>
            <a href="/"
               class="btn btn-success btn-sm">All products</a>

                <input type="hidden" name="_token" value="T5buwIZgwUOv0TsWBWKs7Nu0GoEs8afVLOG1kiK9">
            </form>
        </div>
        <div class="col col-sm-2" >
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
