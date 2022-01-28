@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="">
            <td>My products</td>
            <td><a href="/">home</a></td>
        </div>
            <table id="products-cart" class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            @foreach($cart as $cartItem)
                <tr data-id="{{$cartItem->id}}">
                    <td><a href="/product/{{$cartItem->product->id}}">{{$cartItem->product->title}}</a></td>
                    <td>{{$cartItem->product->description}}</td>
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
