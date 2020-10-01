<?php include "includes/admin_header.php" ?>
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
                      <?php
                      if(isset($_GET['source']))
                      {
                        $source = $_GET['source'];
                      }
                      else
                      {
                          $source = '';
                      }
                      switch($source)
                      {
                        // case 'add_post';
                        //
                        //  include "includes/add_book.php";
                        //
                        // break;


                        case 'edit_book';

                        include "includes/edit_book.php";
                        break;

                        default:

                        include "includes/view_all_books.php";

                        break;
                      }
                      ?>
                    </div>
                </div>
                <!-- /.row -->

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
