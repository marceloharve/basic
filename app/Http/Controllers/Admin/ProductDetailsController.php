<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductDetails;
use App\Models\PrductList;

class ProductDetailsController extends Controller
{
    public function ProductDetails(Request $request)
    {
        $id = $request->id;
        $product_details = ProductDetails::where('product_id',$id)->limit(1)->get();
        $product_list = PrductList::where('id',$id)->limit(1)->get();

        $item = ['productDetails' => $product_details,
        'productList' => $product_list] ;
        
        return $item;
    }
}
