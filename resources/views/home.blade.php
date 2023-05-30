@extends('layouts.master_home')
@section('home_content')
<div id="tooplate_slider" class="section_content"><span class="frame"></span>
@include('layouts.body.slider')
    
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    	<div class="product">
        	<h1>New Products</h1>
            <div class="product_box">
            	<div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/01.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
            <div class="product_box">
               	<div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/02.jpg')}}" alt="image" /></a>
			  </div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/03.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/04.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
		</div>    
        
        <div class="clear h20"></div>
        <hr />
        <div class="clear h10"></div>
        
        <div class="product">
        	<h1>Popular Products</h1>
            <div class="product_box">
            	<div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/01.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
            <div class="product_box">
               	<div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/02.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/03.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
            <div class="product_box">
                <div class="img_box"><span></span>
	                <a href="productdetail.html"><img src="{{asset('frontend/images/product/04.jpg')}}" alt="image" /></a>
				</div>
                <h2><a href="productdetail.html">Product One</a></h2>
                <p class="price">$30</p>
            </div>
		</div>  
            
        <div class="clear"></div>
    </div> <!-- END of main -->
    
@endsection