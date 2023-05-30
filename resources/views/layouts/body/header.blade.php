<div id="tooplate_header">
    	<div id="header_top">
        	<div id="site_title"><a href="index.html">Clothing Template</a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.html" class="selected">Home</a></li>
                    <li><a href="products.html">Products</a>
                        <ul>
                            @foreach($categorias as $categoria)
                                <li><a href="#">{{$categoria->category_name}}</a></li>
                            @endforeach
                      	</ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html" class="last">Contact</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
        </div> <!-- END of header top -->
        
        <div id="header_bottom">
        	<p>
            <a href="shoppingcart.html">My Cart</a> | 
            <a href="checkout.html">Check Out</a> |
        	<span>Item in Cart ( 10 )</span>
            </p>
            
             <div id="tooplate_search">
                <form action="#" method="get">
                  <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END of header bottom -->
    </div> <!-- END of header -->