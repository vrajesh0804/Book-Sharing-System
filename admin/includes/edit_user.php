<?php

if(isset($_GET['u_id']))
{
  $the_user_id = $_GET['u_id'];
}

$query = "SELECT * FROM registration WHERE id = $the_user_id";
$select_user_by_id = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_user_by_id))
{
  $user_id = $row ['id'];
  $user_name = $row ['name'];
  $user_eno = $row ['eno'];
  $user_dept = $row ['dept'];
  $user_cno = $row ['cno'];
  $user_email = $row ['email'];
}

if(isset($_POST['update_user']))
{
  $user_id = $_POST['id'];
  $user_name = $_POST['name'];
  $user_eno = $_POST['eno'];
  $user_dept = $_POST['dept'];
  $user_cno = $_POST['cno'];
  $user_email = $_POST['email'];

  $query_update = " UPDATE registration SET name ='$user_name', eno = $user_eno, dept = '$user_dept', cno = $user_cno, email = '$user_email' WHERE id = $user_id ";

  $update_user = mysqli_query($connection, $query_update);

  if(!$update_user)
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
     <label for="id">Id</label>
      <input value="<?php echo $user_id; ?>" type="number" class="form-control" name="id">
  </div>

  <div class="form-group">
     <label for="name">Name</label>
      <input value="<?php echo $user_name; ?>" type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
     <label for="eno">Enrollment Number</label>
      <input value="<?php echo $user_eno; ?>" type="number" class="form-control" name="eno">
  </div>

  <div class="form-group">
     <label for="dept">Department</label>
      <input value="<?php echo $user_dept; ?>" type="text" class="form-control" name="dept">
  </div>

  <div class="form-group">
     <label for="cno">Contact Number</label>
      <input value="<?php echo $user_cno; ?>" type="number" class="form-control" name="cno">
  </div>

  <div class="form-group">
     <label for="email">E-mail Id</label>
      <input value="<?php echo $user_email; ?>" type="email" class="form-control" name="email">
  </div>

  <div class="form-group">
      <input type="submit" class="btn btn-primary" name="update_user" value="Update User">
  </div>

</form>
