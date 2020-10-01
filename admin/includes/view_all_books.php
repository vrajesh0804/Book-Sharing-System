<?php

$query = "SELECT * FROM books";
$select_books = mysqli_query($connection, $query);

 ?>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Role</th>
            <th>Book Image</th>
            <th>Book Title</th>
            <th>Author Name</th>
            <th>Edition</th>
            <th>Semester</th>
            <th>Department</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>

      <?php

      while($row = mysqli_fetch_assoc($select_books))
      {
        $book_id = $row ['Id'];
        $book_name = $row ['name'];
        $book_cno = $row ['cno'];
        $book_role = $row ['role'];
        $book_image = $row ['Book_Image'];
        $book_title = $row ['Book_Title'];
        $book_author = $row ['Author_Name'];
        $book_edition = $row ['Edition'];
        $book_semester = $row ['Semester'];
        $book_department = $row ['Department'];
        $book_date = $row ['Added_On'];

        echo "<tr>";
        echo "<td>{$book_id}</td>";
        echo "<td>{$book_name}</td>";
        echo "<td>{$book_cno}</td>";
        echo "<td>{$book_role}</td>";
        echo "<td><img width=100 class='img-resoponsive' src='../image/{$book_image}' alt='image'></img></td>";
        echo "<td>{$book_title}</td>";
        echo "<td>{$book_author}</td>";
        echo "<td>{$book_edition}</td>";
        echo "<td>{$book_semester}</td>";
        echo "<td>{$book_department}</td>";
        echo "<td>{$book_date}</td>";
        echo "<td><a href='books.php?source=edit_book&b_id={$book_id}'>Edit</a></td>";
        echo "<td><a href='books.php?delete={$book_id}'>Delete</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <?php

  if(isset($_GET['delete']))
  {
    $the_book_id = $_GET['delete'];

    $query = "DELETE FROM books WHERE Id = {$the_book_id}  ";

     $delete_query = mysqli_query($connection,$query);

     header("Location: books.php");
  }

  ?>
