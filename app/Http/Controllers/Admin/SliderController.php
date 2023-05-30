<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;

class SliderController extends Controller
{
    public function AllSlider()
    {
        $slider_list = HomeSlider::all();
        return $slider_list;
    }
}
