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

$query = "SELECT * FROM migrate";
$select_books = mysqli_query($connection, $query);

?>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Role</th>
            <th>Book Title</th>
            <th>Department</th>
            <!--<th>Book Image</th>
            <th>Author Name</th>
            <th>Edition</th>
            <th>Semester</th>
            <th>Date</th> -->
            <th>Confirm</th>
        </tr>
    </thead>
    <tbody>

      <?php

      while($row = mysqli_fetch_assoc($select_books))
      {
        $book_id = $row ['id'];
        $book_name = $row ['name'];
        $book_cno = $row ['cno'];
        $book_role = $row ['role'];
        $book_title = $row ['Book_Title'];
        $book_department = $row ['Department'];
        // $book_image = $row ['Book_Image'];
        // $book_author = $row ['Author_Name'];
        // $book_edition = $row ['Edition'];
        // $book_semester = $row ['Semester'];
        // $book_date = $row ['Added_On'];

        echo "<tr>";
        echo "<td>{$book_name}</td>";
        echo "<td>{$book_cno}</td>";
        echo "<td>{$book_role}</td>";
        echo "<td>{$book_title}</td>";
        echo "<td>{$book_department}</td>";
        // echo "<td><img width=100 class='img-resoponsive' src='image/{$book_image}' alt='image'></img></td>";
        // echo "<td>{$book_author}</td>";
        // echo "<td>{$book_edition}</td>";
        // echo "<td>{$book_semester}</td>";
        // echo "<td>{$book_date}</td>";
        echo "<td><a href='review_books.php?delete={$book_id}'>Confirm</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <?php
  if(isset($_GET['delete']))
  {
    $the_book_id = $_GET['delete'];

    $query = "DELETE FROM migrate WHERE Id = {$the_book_id}  ";

     $delete_query = mysqli_query($connection,$query);

     header("Location: review_books.php");
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
