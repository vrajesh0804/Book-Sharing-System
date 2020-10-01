<?php include "includes/head_user.php"; ?>
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


			<!-- slider-->
		
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <!-- <li data-target="#carouselExampleCaptions" data-slide-to="3"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/book4.jpg" class="d-block w-100  "  alt=".....">
          <div class="carousel-caption  d-sm-block ">
            <h1 class="Display-2"></h1>
            <h2>New jourey for old books</h2>
            <!-- <button type="button" class="btn btn-outline-danger btn-lg "></button> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/book5.jpg" class="d-block w-100" alt=".....">
          <div class="carousel-caption  d-sm-block">
            <h1 class="Display-2 "></h1>
            <h2>New jourey for old books</h2>
            <!-- <button type="button" class="btn btn-outline-danger btn-lg "></button> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/book6.jpg" class="d-block w-100" alt=".....">
          <div class="carousel-caption  d-sm-block">

            <h2>New jourey for old books</h2>

            <!-- <button type="button" class="btn btn-outline-danger btn-lg "></button> -->
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
    </div>
    <div>
    			<!--books navbar-->

    	<nav class="navbar  navbar-tab navbar-expand-sm navbar-light bg-light">
      <a class="navbar-brand" href="view_all_accessories.php">Accessories</a> <!-- view items -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      	<div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto mt-2 mt-sm-0 ">
         <li class="nav-item dropdown menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              IT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
              <a class="dropdown-item dropmenu" href="it_1.php">1st sem</a>
              <a class="dropdown-item dropmenu" href="categories/it_2.php">2nd sem</a>
              <a class="dropdown-item dropmenu" href="categories/it_3.php">3rd sem</a>
               <a class="dropdown-item dropmenu" href="categories/it_4.php">4th sem</a>
              <a class="dropdown-item dropmenu" href="categories/it_5.php">5th sem</a>
              <a class="dropdown-item dropmenu" href="categories/it_6.php">6th sem</a>
              <a class="dropdown-item dropmenu" href="categories/it_7.php">7th sem</a>
              <a class="dropdown-item dropmenu" href="categories/it_8.php">8th sem</a>
            </div>
          </li>



          <li class="nav-item dropdown menu ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CE
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item dropmenu" href="categories/ce_1.php">1st sem</a>
              <a class="dropdown-item dropmenu" href="categories/ce_2.php">2nd sem</a>
              <a class="dropdown-item dropmenu" href="categories/ce_3.php">3rd sem</a>
              <a class="dropdown-item dropmenu" href="categories/ce_4.php">4th sem</a>
              <a class="dropdown-item dropmenu" href="categories/ce_5.php">5th sem</a>
              <a class="dropdown-item dropmenu " href="categories/ce_6.php">6th sem</a>
              <a class="dropdown-item dropmenu" href="categories/ce_7.php">7th sem</a>
              <a class="dropdown-item dropmenu" href="categories/ce_8.php">8th sem</a>
            </div>
          </li>
          <li class="nav-item dropdown menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              CIVIL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item dropmenu" href="#">1st sem</a>
              <a class="dropdown-item dropmenu" href="#">2nd sem</a>
              <a class="dropdown-item dropmenu" href="#">3rd sem</a>
               <a class="dropdown-item dropmenu" href="#">4th sem</a>
              <a class="dropdown-item dropmenu" href="#">5th sem</a>
              <a class="dropdown-item dropmenu" href="#">6th sem</a>
              <a class="dropdown-item dropmenu" href="#">7th sem</a>
              <a class="dropdown-item dropmenu" href="#">8th sem</a>
            </div>
          </li>

          <li class="nav-item dropdown menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             BM
            </a>
            <div class="dropdown-menu dropmenu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item dropmenu" href="#">1st sem</a>
              <a class="dropdown-item dropmenu" href="#">2nd sem</a>
              <a class="dropdown-item dropmenu" href="#">3rd sem</a>
               <a class="dropdown-item dropmenu" href="#">4th sem</a>
              <a class="dropdown-item dropmenu" href="#">5th sem</a>
              <a class="dropdown-item dropmenu" href="#">6th sem</a>
              <a class="dropdown-item dropmenu" href="#">7th sem</a>
              <a class="dropdown-item dropmenu" href="#">8th sem</a>
            </div>
          </li>


          <li class="nav-item dropdown menu">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              EC
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
              <a class="dropdown-item dropmenu" href="#">1st sem</a>
              <a class="dropdown-item dropmenu" href="#">2nd sem</a>
              <a class="dropdown-item dropmenu" href="#">3rd sem</a>
              <a class="dropdown-item dropmenu" href="#">4th sem</a>
              <a class="dropdown-item dropmenu" href="#">5th sem</a>
              <a class="dropdown-item dropmenu" href="#">6th sem</a>
              <a class="dropdown-item dropmenu" href="#">7th sem</a>
              <a class="dropdown-item dropmenu" href="#">8th sem</a>
            </div>
          </li>
        </ul>
      </div>

    </nav>
    </div>
    </div>
    </header>

    	<!-- intro content-->
     <div class="container-fluid intro">
    <div class="row">
      <div class="col-sm-9">
<!--
        <p>
          Book swapping or book exchange is the practice of a swap of books between one person and another. Practiced among book groups, friends and colleagues at work, it provides an inexpensive way for people to exchange books, find out about new books and obtain a new book to read without having to pay. Because swaps occur between individuals, without central distribution or warehousing, and without the copyright owner making a profit, the practice has been compared to peer-to-peer (P2P) systems such as BitTorrent[1]—except that hard-copy original analog objects are exchanged.


        </p> -->
      </div>

      <!-- <div   class="col-sm-3">
        <label> RECENTLY BOOKS HERES </label><br>
        <a href="book.html"><button type="button" class="btn btn-lg btn-outline-danger" >BOOKS
        </button></a> -->


      </div>
    </div>
    </div>

    <!-- about page-->
    <section class="introabout" id="about" >
    <div>
    <center>
    	<div class="aboutpage">
    		<center >
    		<h1 >ABOUT US</h1>
    		<b><p>
    			Sharing books is the most basic form of sharing knowledge. But, sharing books, hand-to-hand may be a tedious and hardly convenient way. The project aims at providing an electronic medium to share books and provide readers with a platform to discuss the books. It uses the basics of day-to-day social transactions and incorporates them into a business model. It mostly delves into creating a conducive and beneficial environment for students. The system provides a platform for any student or faculties, particularly, who had books or stationery materials of the previous semester, which is no more use for them. Now, they would like to share it with other junior students that they might need it. As per our project, it can accomplish by developing an web application.

    		</p></b>
    		</center>
    	</div>
    	</center>
    	</div>
    </section>
    	<!--footer -->

	<!-- address and all info -->
      <div  class="container-fluid footer1" id="contact">
    <div class="row">
      <div class="col-sm-4">
         <h1 style="color:white; padding-left: 11%; padding-top: 1%;" >Contact Us:</h1>
        <pre style="color: white;  font-size: 20px;">
        38, Radhey square mall,
        near reliance chowkdi,
        Sarghasan,
        Gandhinagar 380054


        Email:book4u@gmail.com
        Phone No:9791728487
        Instagram:book4u_0110

        <b>New journey for old books</b>


        </pre>

      </div>

      <div  class="col-sm-5">

        <div style="padding-top: 2%; padding-bottom: 2%; ">
        <form method='post'>
          <?php
          if(isset($_POST['submit']))
          {
            $feedback_name = $_POST['name'];
            $feedback_number = $_POST['cono'];
            $feedback_email = $_POST['email'];
            $feedback_query = $_POST['query'];

            $add_query = " INSERT INTO feedback(name, cono, email, query) VALUES('$feedback_name', $feedback_number, '$feedback_email', '$feedback_query') ";

            $add_feedback = mysqli_query($connection, $add_query);

            if(!$add_feedback)
            {
              die("error!" + mysqli_error($connection));
            }
            else {
              echo "<h4>Query Submitted!</h4>";
              header("Location: booksharing.php#contact");
            }
          }
          ?>
        <h1 style="color:white; padding-left: 11%; padding-top: 1%;" >Feedback Query:</h1>

        <div class="form-group">
        <label style="color:white;">Name:</label><br>
        <input type="text" style="width: 70%;" class="form-control" name="name"  placeholder="Enter Name" ><br><br>

        <label style="color:white;">Contact Number:<br></label><br>
        <input type="Number" style="width: 70%;"  minlength="11" maxlength="11" placeholder="Contact Number" name="cono" ><br><br>
        <label style="color:white;">Email Id:</label><br>
        <input type="Email" style="width: 70%;" placeholder="Email" name="email" ><br><br>


        <label   style="color:white;">Query:   </label>
        <textarea style="width: 70%;" class="form-control " id="validationTextarea" placeholder="Type your suggestion" name="query" required></textarea><br>

        <button  style=" width:70%;"  class="btn  btncontact" type="submit" name="submit">Submit</button>
        </div>
      </form>
      </div>
    </div>


       <div  class="col-sm-2">
         <div class="social-icons" style="padding-top: 50%;">
          <fieldset>
            <legend><a href="#"><i class="fa fa-twitter fa-2x"></i></a></legend>
              <!-- <h5 style="color:white;">twite here......</h5 ><br> --><br><br><br>


            <legend><a href="#"><i class="fa fa-youtube fa-2x"></i></a></legend>
                      <!-- <h5 style="color:white;">see video here......</h5>--><br><br><br>

            <legend><a href="#"><i class="fa fa-instagram fa-2x"></i></a></legend>
                      <!-- <h5 style="color:white;">follow our page here......</h5>--><br>
          </fieldset>



          </div>
      </div>

           <pre style="color: white; font-size:20px; text-align: center;" align="center">                                             <> with <i class="fas fa-heart"></i></pre>

      </div>
    </div>
    	<script type="text/javascript" src="js/jquery.js"></script>
      	<script type="text/javascript" src="js/bootstrap.min.js"></script>
     	 <script type="text/javascript" src="js/owan.js"></script>
    </body>
    </html>
