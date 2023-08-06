<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart(Request $request, $product)
    {
        // Find the product based on the slug or ID
        $product = Product::where('slug', $product)->firstOrFail();

        // Check if the item already exists in the cart
        $cartItem = Cart::where('product_id', $product->id)->first();

        if ($cartItem) {
            // If the item already exists in the cart, update the quantity
            $cartItem->increment('quantity');
        } else {
            // If the item is not in the cart, add it as a new item
            Cart::create(['product_id' => $product->id]);
        }

        return redirect()->back()->with('success', 'Item added to cart successfully!');
    }

    public function viewCart()
    {
        $cartItems = Cart::with('product')->get();

        return view('cart', compact('cartItems'));
    }
}

