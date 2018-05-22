<html>
@include('_includes/header')
<body style="background:#b0bec5">
	<div class="wrapper">
	
	@include('_includes/default')

	<div style="margin-top: 30px" id="main">
		
	@yield('content')
					
	</div>
		
   <div class="links" style="margin-top: 50px">
            <a href="https://laravel.com/docs">facebook</a>
            <a href="https://laracasts.com">twitter</a>
            <a href="https://laravel-news.com">instagram</a>
   
     </div>
</div>

</body>
</html>