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
                      <center><h3>Add New Admin</h3></center>
                      <?php

                        if(isset($_POST['add_admin']))
                        {
                          $admin_name = $_POST['Username'];
                          $admin_password = $_POST['Password'];

                          $add_query = " INSERT INTO admin(Username, Password) VALUES('$admin_name', '$admin_password') ";

                          $add_admin = mysqli_query($connection, $add_query);

                          if(!$add_admin)
                          {
                            die("error!" + mysqli_error($connection));
                          }
                          else {
                            echo "<h4>Query Added!</h4>";
                          }
                        }
                      ?>
                      <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                           <label for="name">Name</label>
                            <input type="text" class="form-control" name="Username" placeholder="Username">
                        </div>

                        <div class="form-group">
                           <label for="dept">Password</label>
                            <input type="text" class="form-control" name="Password" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="add_admin" value="Add Admin">
                        </div>
                      </form>

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
