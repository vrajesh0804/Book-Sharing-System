<?php
include "includes/head_user.php";
session_start();
if(isset($_SESSION['email']))
{
  $email = $_SESSION['email'];
$query = "SELECT * FROM authenticate WHERE email = '$email' ";
$select_profile_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($select_profile_query))
{
  $user_email = $row ['email'];
  $user_password = $row ['password'];
}
// $check = "SELECT * FROM authenticate WHERE cno IS NOT NULL";
// if(!$check)
// {
if(isset($_POST['Login']))
{

 $cno = $_POST['cno'];
 $eno = $_POST['eno'];


  $update_query= " UPDATE authenticate SET cno = $cno, eno = $eno WHERE email ='$user_email' ";

  $update_profile_query= mysqli_query($connection,$update_query);

  if(!$update_query)
  {
    die("error!" + mysqli_error($connection));
  }
  else {
    header("location: categories.php");
  }
}
}
?>

<div class="container-fluid intro">
<div class="row">
  <div class="col-sm-2">
  </div>
<div class="col-sm-8">
    <body align="center">
    <h1 style="padding-top: 10%; text-align:center;">Provide Necessary Details</h1>
    <hr style="width: 700px; margin-left: 150px;" ><br>
    <form action="#" method="post"><h5 align="center">
        <div class="form-group">
                <label style="margin-left:  54px; margin-top: 10px;">Enrollment Number</label>
                <input type="number" name="eno" style="margin-left: 20px;" class="form-control"><br>

            </div>
            <div class="form-group">
                <label style="margin-left: 35px;">Mobile Number</label>
                <input type="number" name="cno" class="form-control" ><br>

            </div>
            <div class="form-group">
                <button type="submit" style="margin-left: 130px;" id="btnSubmit btn" name="Login" class=" registerbtn" value="Login">Add Details</button> <br>
        <hr style="width: 700px; margin-left: 150px;" ><br>
            </div>
        </h5>
        </form>
    </div>
  </div>
<?php
// }
// else{
//   header ("location: booksharing.php");
// }
?>


  <div   class="col-sm-2">
  </div>
</div>
</div>

  <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/owan.js"></script>
</body>
</html>
