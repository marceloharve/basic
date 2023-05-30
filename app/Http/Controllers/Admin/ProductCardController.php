<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCard;
use App\Models\PrductList;

class ProductCardController extends Controller
{
    //

    public function addToCart(Request $request)
    {
        $email = $request->input('email');

        $size = $request->input('size');
        $color = $request->input('color');
        $quantity = $request->input('quantity');
        $product_code = $request->input('product_code');

        $productDetails = PrductList::where('product_code',$product_code)->get();
        $price = $productDetails[0]['price'];
        $special_price = $productDetails[0]['special_price'];

        if($special_price == "")
        {
            $total_price = $price * $quantity;
            $unit_price = $price;

        }
        else
        {
            $total_price = $special_price * $quantity;
            $unit_price = $special_price;
        }

        $result = ProductCard::insert([
            'email' => $email,
            'image' => $productDetails[0]['image'],
            'product_name' => $productDetails[0]['title'],
            'product_code' => $productDetails[0]['product_code'],
            'size' => $size,
            'color' => $color,
            'quantity' => $quantity,
            'unit_price' => $unit_price,
            'total_price' => $total_price,
        ]);

        return $result;

    }

    public function CartCount(Request $request)
    {
        $email = $request->input('email');
        $result = ProductCard :: where('email',$email)->count();
        return $result;
    }
}
