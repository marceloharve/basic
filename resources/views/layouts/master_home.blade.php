<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clothing Template, free HTML CSS template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2062 Clothing 
http://www.tooplate.com/view/2062-clothing
-->
<link href="{{asset('frontend/tooplate_style.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/ddsmoothmenu.css')}}" />

<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/ddsmoothmenu.js')}}">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="{{asset('frontend/css/jquery.dualSlider.0.2.css')}}" />

<script src="{{asset('frontend/js/jquery-1.3.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/jquery.timers-1.2.js')}}" type="text/javascript"></script>
<script src="{{asset('frontend/js/jquery.dualSlider.0.3.min.js')}}" type="text/javascript"></script>


<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:false,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
    
    
</script>

<link rel="stylesheet" href="{{asset('frontend/css/slimbox2.css')}}" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="{{asset('frontend/js/slimbox2.js')}}"></script> 

</head>
<body>

<div id="tooplate_wrapper">

@include('layouts.body.header')    
@yield('home_content')
</div> <!-- END of wrapper -->

@include('layouts.body.footer')
</body>
</html>