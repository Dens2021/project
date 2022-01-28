<?php

namespace App\Http\Controllers;

use App\Models\Entities\CartEntity;
use App\Models\Entities\ProductEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'products' => ProductEntity::paginate(20, ['*'], 'productsPage'),
            'cart' => CartEntity::where('user_id', Auth::user()->id)->orderBy('created_at')->paginate(20, ['*'], 'cartPage'),
        ]);
    }

}
