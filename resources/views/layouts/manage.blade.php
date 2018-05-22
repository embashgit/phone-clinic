<html>
@include('_includes/header')
<body style="background: #eceff1">
	<div class="wrapper">
		<div class=""></div>
	@include('_includes/nav')

	<div id="main">
		
	@yield('content')
					
	</div>
		
	@include('_includes/footer');
</div>

</body>
</html>