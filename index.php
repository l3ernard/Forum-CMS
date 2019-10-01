<?php
include 'include/cfg.inc.php';

?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Forum CMS</title>
	<meta name="description" content="Dingen">
 	<meta name="author" content="Bernard">
    <script src="<?php echo$root; ?>js/jquery-3.4.1.min.js"></script>
  	<link rel="stylesheet" href="<?php echo$root . 'css/' . $style . '.css?v=1.0';?>">
</head>

<body>
	<div id="wrap">
        <div id="grid-container">
            <header>
                <div id="logo">
                    <h1>Forum - CMS</h1>
                    <sub>wtf sick subtitle</sub>
                </div>


                <div id="menu">
                    <ul>
                        <li><a href="<?php echo$root; ?>home">Home</a></li>
                        <li><a href="<?php echo$root; ?>contact">Contact</a></li>
                        <li><a href="<?php echo$root; ?>forum">Forum</a></li>
                        <li><?php if($_SESSION){ echo'<a href="logout">Logout</a>';} else { echo'<a href="' . $root . 'login">Login</a>';} ?></li>
                    </ul>
                </div>
            </header>
            <main>

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
            </main>
            <footer>
                Bernard Stornebrink 2019
            </footer>
		</div>

	</div>
</body>

</html>