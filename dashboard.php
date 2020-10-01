<?php include "includes/head_user.php";

$query = "SELECT * FROM migrate";
$select_books = mysqli_query($connection, $query);

?>
<br><br><br><br>
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
        $book_b_id = $row ['b_id'];
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
        echo "<td><a href='dashboard.php?delete={$book_id}'>Confirm</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <?php
  echo "Note: When you get your material then please click confirm.";
  if(isset($_GET['delete']))
  {
    $the_book_id = $_GET['delete'];

    $query = "DELETE FROM migrate WHERE Id = {$the_book_id}  ";

     $delete_query = mysqli_query($connection,$query);

      $query_2 = "DELETE FROM books WHERE Id = {$book_b_id}  ";

      $delete_query_2 = mysqli_query($connection,$query_2);

     header("Location: dashboard.php");
  }
?>

<?php
$query = "SELECT * FROM migrate_accessories";
$select_access = mysqli_query($connection, $query);

?>
<br><br><br><br>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Role</th>
            <th>Tool Name</th>
            <!--<th>Department</th>
            <th>Book Image</th>
            <th>Author Name</th>
            <th>Edition</th>
            <th>Semester</th>
            <th>Date</th> -->
            <th>Confirm</th>
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
        //$book_department = $row ['Department'];
        // $book_image = $row ['Book_Image'];
        // $book_author = $row ['Author_Name'];
        // $book_edition = $row ['Edition'];
        // $book_semester = $row ['Semester'];
        // $book_date = $row ['Added_On'];

        echo "<tr>";
        echo "<td>{$access_name}</td>";
        echo "<td>{$access_cno}</td>";
        echo "<td>{$access_role}</td>";
        echo "<td>{$access_toolname}</td>";
        // echo "<td>{$book_department}</td>";
        // echo "<td><img width=100 class='img-resoponsive' src='image/{$book_image}' alt='image'></img></td>";
        // echo "<td>{$book_author}</td>";
        // echo "<td>{$book_edition}</td>";
        // echo "<td>{$book_semester}</td>";
        // echo "<td>{$book_date}</td>";
        echo "<td><a href='dashboard.php?delete={$access_id}'>Confirm</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <?php
  echo "Note: When you get your material then please click confirm.";
  if(isset($_GET['delete']))
  {
    $the_access_id = $_GET['delete'];

    $query = "DELETE FROM migrate_accessories WHERE id = {$the_access_id}  ";

     $delete_query = mysqli_query($connection,$query);

     header("Location: dashboard.php");
  }
?>
<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/owan.js"></script>
</body>
</html>
