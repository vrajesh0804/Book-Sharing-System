<?php
    Include "includes/head_user.php";
    // include "includes/db.php"
  ?>

<link rel="stylesheet" type="text/css" href="css/card.css">
<body>
<br><br><br><br>
<table>
	<tr>
    <?php

    $query = "SELECT * FROM books";
    // print_r($query);
    // die();
    $select_books = mysqli_query($connection, $query);

    $flag = 0;
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
      //$book_date = $row ['Added_On'];

      $flag++;
    ?>
      <td style="padding-right: 100px; padding-bottom:60px;">
        <div class="card">
            <div class="imgBx">
                <img src="image/<?php echo $book_image; ?>" alt="images">
            </div>
            <div class="details">
                <p>Book Title: - <?php echo $book_title; ?><br></p>
                <span>Author Name: - <?php echo $book_author; ?>
                <br>Edition: - <?php echo $book_edition; ?></span>
                <form method="post">
                <button name="cart"><a href="dashboard.php"><i class="fa fa-shopping-cart" style="font-size:40px;color:#3399ff;"></i></a></button></form>
            </div>
          </div>
      </td>
    <?php
      if($flag == 3)
      {
        echo "</tr>";
        $flag = 0;
      }
      }
    ?>
</table>
<?php
if(isset($_SESSION['email']))
{
  $email = $_SESSION['email'];
$query = "SELECT * FROM authenticate WHERE email = '$email' ";
$select_profile_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($select_profile_query))
{
  $user_email = $row ['email'];
}
// $check = "SELECT * FROM authenticate WHERE cno IS NOT NULL";
// if(!$check)
// {
if(isset($_POST['cart']))
{

 // $cno = $_POST['cno'];
 // $eno = $_POST['eno'];
  $insert_query= "insert into migrate(email, name, cno, role, b_id, Book_Title, Department) VALUES('$user_email', '$book_name', $book_cno, '$book_role', $book_id, '$book_title', '$book_department')";

  $insert_migrate_query= mysqli_query($connection,$insert_query);

  if(!$insert_migrate_query)
  {
    die("error!" + mysqli_error($connection));
  }
}
}
?>

 </body>
