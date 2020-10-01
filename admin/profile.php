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

                      <center><h3>Edit Admin Profile</h3></center>

                      <?php

                      if(isset($_SESSION['username']))
                      {
                        $username = $_SESSION['username'];

                        $query = "SELECT * FROM admin WHERE username = '$username' ";
                        $select_admin_profile_query = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_array($select_admin_profile_query))
                        {
                          $admin_name = $row ['Username'];
                          $admin_password = $row ['Password'];
                        }

                        if(isset($_POST['update_admin']))
                        {
                          $admin_name = $_POST['Username'];
                          $admin_password = $_POST['Password'];

                          $query_update = " UPDATE admin SET Username ='$admin_name', Password = '$admin_password' WHERE Username ='$admin_name' ";

                          $update_admin = mysqli_query($connection, $query_update);

                          if(!$update_admin)
                          {
                            die("error!" + mysqli_error($connection));
                          }
                          else {
                            $_SESSION['username'] = null;
                            header("Location: ../booksharing.php");
                          }
                        }
                      }

                      ?>

                      <form action="" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                           <label for="name">Name</label>
                            <input value="<?php echo $admin_name; ?>" type="text" class="form-control" name="Username">
                        </div>

                        <div class="form-group">
                           <label for="dept">Password</label>
                            <input value="<?php echo $admin_password; ?>" type="text" class="form-control" name="Password">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="update_admin" value="Update Admin">
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
