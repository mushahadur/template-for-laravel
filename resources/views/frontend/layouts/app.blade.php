<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta name="Mushahedur" content="Full stack web developer">

     
        <!-- title of site -->
        <title>Home Page</title>

        @include('frontend.layouts.partials.style')
        

    </head>
	
	<body>

	<!--header-area start -->
	@include('frontend.layouts.partials.header')

    <!--header-area end -->
        
        
        <!--Main Section Start-->
		@yield('contain')
        <!--Main Section End-->	

		<!--footer start-->
        
		@include('frontend.layouts.partials.footer')
	
        <!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		@include('frontend.layouts.partials.script')

		
    </body>
	
</html>