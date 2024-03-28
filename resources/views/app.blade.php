<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>about - Frozen Yogurt Shop</title>
	<link rel="stylesheet" href="{{ asset('font-end/css/styles.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('font-end/css/mobile.css') }}" type="text/css">
	<script src="{{ asset('font-end/js/mobile.css') }}" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index" class="logo"><img src="{{asset('/images/logo.png')}}" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="{{asset('/index')}}">Home</a>
					</li>
					<li class="menu selected">
						<a href="about">About</a>
						<ul class="primary">
							<li>
								<a href="{{asset('/product')}}">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="{{asset('/blog')}}">Blog</a>
						<ul class="secondary">
							<li>
								<a href="{{asset('/singlepos')}}">Single post</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="{{asset('/contact')}}">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		
		@yield('content')

		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
