<?php
include 'include/DBConn.inc.php';
include 'include/user.inc.php';
include 'include/viewuser.inc.php';

?>
<html>
	<head>
	<meta charset="UTF-8">
	<title>Forum CMS</title>
	<meta name="description" content="Dingen">
 	<meta name="author" content="Bernard">

  	<link rel="stylesheet" href="http://localhost/3/forum-cms/css/style.css?v=1.0">
</head>

<body>
	<div id="wrap">
        <div id="grid-container">
            <header>
                <div id="logo">
                    <h1>Forum - CMS</h1>
                    <sub>wtf</sub>
                </div>


                <div id="menu">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="forum">Forum</a></li>
                        <li><a href="login">Login</a></li>
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