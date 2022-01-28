<?php

namespace App\Http\Controllers;

use App\Models\Entities\CartEntity;
use App\Models\Entities\ProductEntity;
use App\Models\Entities\ProductImageEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use RuntimeException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductsController extends Controller
{
    public function addImages(int $productId)
    {
        $product = ProductEntity::where('id', $productId)->first();
        if (!$product) {
            throw new NotFoundHttpException();
        }

        return view('products.add-images', ['product' => $product]);
    }

    public function uploadImages(Request $request, int $productId)
    {
        $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $dir = "/images/{$productId}/";
        $rout = public_path() . $dir;
        File::ensureDirectoryExists($rout);

        foreach ($request->file('images') as $file) {
            $fileName = time() . '_' . md5($file->getFilename()) . '.' . $file->extension();
            $file->move($rout, $fileName);

            $image = new ProductImageEntity();
            $image->product_id = $productId;
            $image->file_path = $dir . $fileName;
            $image->save();
        }

        return redirect('/');
    }

    function delete(int $productId)
    {
        ProductEntity::where('id', $productId)->delete();

        return redirect('/');
    }

    public function createProduct(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'description' => 'required|max:255',
            'quantity' => 'required',
        ]);

        $product = new ProductEntity($validated);
        $product->title = $validated['title'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->quantity = $validated['quantity'];

        $product->save();

        return redirect('/');
    }
    public function product($productId)
    {
        return view('products.product', [
            'product' => ProductEntity::where('id', $productId)->first(),
            'cart' => CartEntity::where('user_id', Auth::user()->id)->orderBy('created_at')->paginate(20, ['*'], 'cartPage'),
            ]);
    }
}
