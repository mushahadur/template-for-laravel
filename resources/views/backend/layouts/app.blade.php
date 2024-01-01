<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')|| Page</title>

    <meta charset="utf-8">
    <meta name="author" content="Mushahedur" />
 
    @include('backend.layouts.partials.style')
    

</head>
<body class="">


 

	<!-- [ navigation menu ] start -->

   @include('backend.layouts.partials.sidebar')

	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
    @include('backend.layouts.partials.header')

	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
@yield('contain')


@include('backend.layouts.partials.script')

</body>

</html>
