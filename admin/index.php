<?php include "includes/admin_header.php";?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small><?php echo $_SESSION['username']; ?></small>
                        </h1>
                    </div>
                </div>
         <!-- /.row -->

          <div class="row">
          <div class="col-lg-3 col-md-6">
           <div class="panel panel-primary">
               <div class="panel-heading">
                   <div class="row">
                       <div class="col-xs-3">
                           <i class="fa fa-file-text fa-5x"></i>
                       </div>
                       <div class="col-xs-9 text-right">
                         <?php
                           $query = "SELECT * FROM books";
                           $select_all_books = mysqli_query($connection,$query);
                           $books_count = mysqli_num_rows($select_all_books);
                           echo  "<div class='huge'>{$books_count}</div>";
                          ?>
                           <div>Total Books</div>
                       </div>
                   </div>
               </div>
               <a href="books.php">
                   <div class="panel-footer">
                       <span class="pull-left">View Details</span>
                       <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                       <div class="clearfix"></div>
                   </div>
               </a>
           </div>
          </div>
          <div class="col-lg-3 col-md-6">
           <div class="panel panel-green">
               <div class="panel-heading">
                   <div class="row">
                       <div class="col-xs-3">
                           <i class="fa fa-comments fa-5x"></i>
                       </div>
                       <div class="col-xs-9 text-right">
                        <?php
                         $query = "SELECT * FROM books";
                         $select_all_books = mysqli_query($connection,$query);
                         $books_count = mysqli_num_rows($select_all_books);
                         echo  "<div class='huge'>{$books_count}</div>";
                        ?>
                         <div>Borrowed Books</div>
                       </div>
                   </div>
               </div>
               <a href="books.php">
                   <div class="panel-footer">
                       <span class="pull-left">View Details</span>
                       <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                       <div class="clearfix"></div>
                   </div>
               </a>
           </div>
          </div>
          <div class="col-lg-3 col-md-6">
           <div class="panel panel-yellow">
               <div class="panel-heading">
                   <div class="row">
                       <div class="col-xs-3">
                           <i class="fa fa-user fa-5x"></i>
                       </div>
                       <div class="col-xs-9 text-right">
                       <?php
                         $query = "SELECT * FROM registration";
                         $select_all_users = mysqli_query($connection,$query);
                         $users_count = mysqli_num_rows($select_all_users);
                         echo  "<div class='huge'>{$users_count}</div>";
                        ?>
                           <div> Users</div>
                       </div>
                   </div>
               </div>
               <a href="users.php">
                   <div class="panel-footer">
                       <span class="pull-left">View Details</span>
                       <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                       <div class="clearfix"></div>
                   </div>
               </a>
           </div>
          </div>
          <div class="col-lg-3 col-md-6">
           <div class="panel panel-red">
               <div class="panel-heading">
                   <div class="row">
                       <div class="col-xs-3">
                           <i class="fa fa-list fa-5x"></i>
                       </div>
                       <div class="col-xs-9 text-right">
                      <?php
                         $query = "SELECT * FROM insert_accessory";
                         $select_all_access = mysqli_query($connection,$query);
                         $access_count = mysqli_num_rows($select_all_access);
                         echo  "<div class='huge'>{$access_count}</div>";
                      ?>
                            <div>Accessories</div>
                       </div>
                   </div>
               </div>
               <a href="books.php">
                   <div class="panel-footer">
                       <span class="pull-left">View Details</span>
                       <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                       <div class="clearfix"></div>
                   </div>
               </a>
           </div>
          </div>
          </div>
         <!-- /.row -->

         <div class="row">

           <script type="text/javascript">
     google.charts.load('current', {'packages':['bar']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['Data', 'Count'],
         <?php
           $element_text = ['Total Books','Borrowed Books','Users', 'Accessories'];
           $element_count = [$books_count, $books_count, $users_count, $access_count];
           for($i = 0; $i < 4; $i++)
           {

               echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
           }
         ?>
       ]);

       var options = {
         chart: {
           title: '',
           subtitle: '',
         }
       };

       var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

       chart.draw(data, google.charts.Bar.convertOptions(options));
     }
   </script>

   <div id="columnchart_material" style="width: 'auto'; height: 370px;"></div>

         </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
