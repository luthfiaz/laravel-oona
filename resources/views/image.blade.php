<!DOCTYPE HTML>
<!--
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Laravel for OONA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{ asset('public/new/assets/css/main.css') }}" />

		@include('analytics')
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="#"> Laravel </a><span>by Luthfi Azhari</span></div>
			</header>

		<!-- Main -->
			<section id="main">
				<div class="inner">

				<!-- One -->
					<section id="one" class="wrapper style1">

						<div class="image fit flush">
							<img src="{{ url('/').'/'.$img->source }}" alt="Whoops! Looks like there's nothing to see here" />
						</div>
						<header class="special">
							<p>This page is intended for Laravel/OONA technical test</p>
							<h4>Admin? <a href="{{ url('/login') }}">Login here</a></h4>
						</header>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="http://twitter.com/hanacchiz" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="http://fb.com/theluthfiaz" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
						<li><a href="http://instagram.com/hanakkkun" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Luthfi Azhari. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{ asset('public/new/assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('public/new/assets/js/jquery.poptrox.min.js') }}"></script>
			<script src="{{ asset('public/new/assets/js/skel.min.js') }}"></script>
			<script src="{{ asset('public/new/assets/js/util.js') }}"></script>
			<script src="{{ asset('public/new/assets/js/main.js') }}"></script>

	</body>
</html>