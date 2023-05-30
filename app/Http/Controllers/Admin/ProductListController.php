<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrductList;

class ProductListController extends Controller
{
    public function ProductListByRemark(Request $request)
    {
        $remark = $request->remark;
        $product_list = PrductList::where('remark',$remark)->limit(4)->get();
        return $product_list;
    }
}
