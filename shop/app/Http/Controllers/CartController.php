<?php

namespace App\Http\Controllers;

use App\Models\Entities\CartEntity;
use App\Models\Entities\ProductEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request): CartEntity
    {
       $validated = $request->validate([
           'productId' => 'required|exists:products,id',
       ]);

       /** @var CartEntity $cart */
       $cart = CartEntity::firstOrNew([
           'user_id' => Auth::user()->id,
           'product_id' => $validated['productId'],
       ]);
       $cart->quantity++;
       $cart->save();

       $cart->load('product');
       return $cart;
    }

    public function cart()
    {
        return view('products.cart', [
            'cart' => CartEntity::where('user_id', Auth::user()->id)->orderBy('created_at')->paginate(20, ['*'], 'cartPage'),
        ]);
    }
}
