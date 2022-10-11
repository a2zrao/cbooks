<html>

	<head>
		<title>C-BOOKS | Profile Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<img class="logo" src="images/c-books.png" alt="Logo"  style="width: 50px; height: 50px; padding: auto;"> <span class="title" style="padding-bottom: 43px;">C-Books | Shaping Lives… Empowering Communities…</span>
								</a>
						</div>
					</header>
					

<div class="container">
	<div id="main">
						<div class="inner">
								<div class="container">
									<div class="col-sm-6">

										<?php

											include('user-check.php');

											if($_SESSION['name']){
												echo '<h2 class="m-n"> Profile page of '.$_SESSION['name'].' </h2><br>';
												echo '<a href="logout.php" class="m-n"><input type="submit" name="submit" value="logout"></a>';

											}else{

												echo '<a href="login.html"><input type="submit" name="submit" value="login"></a>';
											}
										?>
									</div>
																</div>
															</div>
														</div>

</div>

<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>Copyright © 2022 Centurion Books | Shaping Lives… Empowering Communities…</li>
								<li>Made with 💗 <a href="https://cutmap.ac.in/">Centurion University of Technology and Management</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

