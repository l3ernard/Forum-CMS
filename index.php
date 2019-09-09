<?php


?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Forum CMS</title>
	<meta name="description" content="Dingen">
 	<meta name="author" content="Bernard">

  	<link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>
	<div id="wrap">
		<div id="header">
			<div id="logo">
				<h1>Forum - CMS</h1>
				<sub>wtf</sub>
			</div>


			<div id="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Forum</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			<div id="content">

			<?php
			if(!isset($_GET['p'])){
				include('pages/home.php');
			} else {
				if(!file_exists("pages/" . $_GET['p'] . ".php")){
					header("Location: home");
				} else {
					include("pages/" . $_GET['p'] . ".php");
				}

			}
			?>
			
			</div>
		</div>
		<div id="footer">
			Bernard Stornebrink 2019
		</div>

	</div>
</body>

</html>