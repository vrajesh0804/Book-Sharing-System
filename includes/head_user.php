<?php include "db.php";

session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Comptible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/book.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Book Sharing System</title>
	<style>
        html {scroll-behavior: smooth;}

	</style>
	</head>


</head>
<body>
	<header>
		<!-- navbar -->


<nav class="navbar navbar-expand-sm navbar-dark   fixed-top navigation">
	<a class="navbar-brand" href="#" style="margin-top: 5px;">
    <img src="image/demo.png" width="35" height="35" class="d-inline-block align-top img1" alt="" style="margin-right: 10px; margin-bottom:  10px; float: left; ">
   book4u
  </a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

    <ul class="navbar-nav ml-auto mt-2 mt-sm-0">
      <!-- <li class="nav-item ">
        <a class="nav-link linkbig" href="booksharing.php">Home<span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item linkbig">
        <a class="nav-link " href="dashboard.php">Cart</a>
      </li>
      <li class="nav-item linkbig">
        <a class="nav-link" href="categories.php"><?php echo $_SESSION['email']; ?></a>
      </li>
			<li class="nav-item linkbig">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>

    </ul>

  </div>
</nav>
</header>
</body>
</html>
