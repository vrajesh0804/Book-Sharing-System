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
$query = "SELECT * FROM insert_accessory";
$select_access = mysqli_query($connection, $query);

 ?>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Role</th>
            <th>Tool Image</th>
            <th>Tool Name</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

      <?php

      while($row = mysqli_fetch_assoc($select_access))
      {
        $access_id = $row ['id'];
        $access_name = $row ['aname'];
        $access_cno = $row ['acno'];
        $access_role = $row ['arole'];
        $access_toolname = $row ['toolname'];
        $access_image = $row ['toolimg'];

        echo "<tr>";
        echo "<td>{$access_id}</td>";
        echo "<td>{$access_name}</td>";
        echo "<td>{$access_cno}</td>";
        echo "<td>{$access_role}</td>";
        echo "<td>{$access_toolname}</td>";
        echo "<td><img width=100 class='img-resoponsive' src='../image/{$access_image}' alt='image'></img></td>";
        // echo "<td>{$book_title}</td>";
        // echo "<td>{$book_author}</td>";
        // echo "<td>{$book_edition}</td>";
        // echo "<td>{$book_semester}</td>";
        // echo "<td>{$book_department}</td>";
        // echo "<td>{$book_date}</td>";
        // echo "<td><a href='books.php?source=edit_book&b_id={$book_id}'>Edit</a></td>";
        echo "<td><a href='accessories.php?delete={$access_id}'>Delete</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <?php

  if(isset($_GET['delete']))
  {
    $the_access_id = $_GET['delete'];

    $query = "DELETE FROM insert_accessory WHERE id = {$the_access_id}  ";

     $delete_query = mysqli_query($connection,$query);

     header("Location: accessories.php");
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
