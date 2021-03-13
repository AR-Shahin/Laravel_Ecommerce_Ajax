<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>@yield('title','Ecommerce') | Ecommerce</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700,800' ] }
		};
		(function(d) {
			var wf = d.createElement('script'), s = d.scripts[0];
			wf.src = '{{asset('frontend')}}/assets/js/webfont.js';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css">

	<!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendor/fontawesome-free/css/all.min.css">
	@stack('css')
</head>
<body class="boxed">

@yield('app_content')

<a id="scroll-top" href="#top" title="Top" role="button"><i class="fas fa-chevron-up"></i></a>

<!-- Plugins JS File -->
<script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/plugins.min.js"></script>
<script src="{{asset('frontend')}}/assets/js/jquery.appear.min.js"></script>
<!-- Main JS File -->
<script src="{{asset('frontend')}}/assets/js/main.min.js"></script>
@stack('script')
</body>
</html>