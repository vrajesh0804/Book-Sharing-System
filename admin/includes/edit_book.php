<?php

if(isset($_GET['b_id']))
{
  $the_book_id = $_GET['b_id'];
}

$query = "SELECT * FROM books WHERE Id = $the_book_id";
$select_books_by_id = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_books_by_id))
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
}

if(isset($_POST['update_book']))
{
  $book_id = $_POST['Id'];
  $book_name = $row ['name'];
  $book_cno = $row ['cno'];
  $book_role = $row ['role'];
  $post_image = $_FILES['Book_Image']['name'];
  $book_image_temp = $_FILES['Book_Image']['tmp_name'];
  $book_title = $_POST['Book_Title'];
  $book_author = $_POST['Author_Name'];
  $book_edition = $_POST['Edition'];
  $book_semester = $_POST['Semester'];
  $book_department = $_POST['Department'];
  $book_date = $_POST ['Date'];

  move_uploaded_file($book_image_temp, "../images/$book_image");

  if(empty($book_image))
  {
  $query = "SELECT * FROM books WHERE Id = $the_book_id ";
  $select_image = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($select_image))
  {
     $book_image = $row['Book Image'];
  }
}

  $query_update = " UPDATE books SET Subject_code ='$book_code' Book_Image ='$book_image', Book_Title ='$book_title', Author_Name = '$book_author', Edition ='$book_edition', Semester = '$book_semester', Department ='$book_department', Added_On = $book_date WHERE Id = $book_id ";

  $update_book = mysqli_query($connection, $query_update);

  if(!$update_book)
  {
    die("error!" + mysqli_error($connection));
  }
  else {
    echo "<h4>Query Updated!</h4>";
  }
}

 ?>

<form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
     <label for="Id">Id</label>
      <input value="<?php echo $book_id; ?>" type="number" class="form-control" name="Id">
  </div>

  <div class="form-group">
     <label for="name">Name</label>
      <input value="<?php echo $book_name; ?>" type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
     <label for="Subject_Code">Contact Number</label>
      <input value="<?php echo $book_cno; ?>" type="number" class="form-control" name="cno">
  </div>

  <div class="form-group">
     <label for="role">Role</label>
      <input value="<?php echo $book_role; ?>" type="text" class="form-control" name="role">
  </div>

  <div class="form-group">
     <label for="Book Image">Book Image</label><br>
      <img width=100 class='img-resoponsive' src='../image/<?php echo $book_image; ?>' alt='image'/>
      <input type="file" name="Book_Image" />
  </div>

  <div class="form-group">
     <label for="Book Title">Book Title</label>
      <input value="<?php echo $book_title; ?>" type="text" class="form-control" name="Book_Title">
  </div>

  <div class="form-group">
     <label for="Author Name">Author Name</label>
      <input value="<?php echo $book_author; ?>" type="text" class="form-control" name="Author_Name">
  </div>

  <div class="form-group">
     <label for="Edition">Edition</label>
      <input value="<?php echo $book_edition; ?>" type="text" class="form-control" name="Edition">
  </div>

  <div class="form-group">
     <label for="Semester">Semester</label>
      <input value="<?php echo $book_semester; ?>" type="text" class="form-control" name="Semester">
  </div>

  <div class="form-group">
     <label for="Department">Department</label>
      <input value="<?php echo $book_department; ?>" type="text" class="form-control" name="Department">
  </div>

  <div class="form-group">
     <label for="Date">Date</label>
      <input value="<?php echo $book_date; ?>" type="text" class="form-control" name="Date">
  </div>

  <div class="form-group">
      <input type="submit" class="btn btn-primary" name="update_book" value="Update Book">
  </div>

</form>
