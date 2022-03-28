<?php
	session_start();
	
	if(isset($_SESSION['adminlogin'])){
		
		if($_SESSION['adminlogin']=='Yes'){
			echo '<a href="logout.php">登出系統</a>';
		}else{
			echo '<a href="login.php">非法進入系統，請登入管理者';
			exit();
		}
	}else{
			echo '<a href="login.php">非法進入系統，請登入管理者';
			exit();
	}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>管理者頁面</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="NUKIM_php_homework">
    	<meta name="author" content="weny">
    	<link rel="icon" href="/php_homework/web.login&register/images/login.png" type="image/x-icon"/>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Nav -->
						<?php require_once("all_head.php"); ?>
						<h1 id="logo">Welcome to Admin!</h1>
					</div>
				</section>


			<!-- Footer -->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>