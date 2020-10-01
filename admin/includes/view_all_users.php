<?php

$query = "SELECT * FROM registration";
$select_users = mysqli_query($connection, $query);

 ?>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Enrollment Number</th>
            <th>Department</th>
            <th>Contact Number</th>
            <th>E-mail Id</th>
            <th>Status</th>
            <th>Approve</th>
            <th>Unapprove</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

      <?php

      while($row = mysqli_fetch_assoc($select_users))
      {
        $user_id = $row ['id'];
        $user_name = $row ['name'];
        $user_eno = $row ['eno'];
        $user_dept = $row ['dept'];
        $user_cno = $row ['cno'];
        $user_email = $row ['email'];
        $user_status = $row ['status'];

        echo "<tr>";
        echo "<td>{$user_id}</td>";
        echo "<td>{$user_name}</td>";
        echo "<td>{$user_eno}</td>";
        echo "<td>{$user_dept}</td>";
        echo "<td>{$user_cno}</td>";
        echo "<td>{$user_email}</td>";
        echo "<td>{$user_status}</td>";
        echo "<td><a href='users.php?approve=$user_id'>Approve</a></td>";
        echo "<td><a href='users.php?unapprove=$user_id'>Unapprove</a></td>";
        echo "<td><a href='users.php?source=edit_user&u_id=$user_id'>Edit</a></td>";
        echo "<td><a href='users.php?delete=$user_id'>Delete</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <?php

  if(isset($_GET['approve']))
  {
      $the_user_id = $_GET['approve'];

      $query = "UPDATE registration SET status = 'Approved' WHERE id = {$the_user_id} ";
      $approve_user_query = mysqli_query($connection, $query);
      header("Location: users.php");
  }

  if(isset($_GET['unapprove']))
  {
      $the_user_id = $_GET['unapprove'];

      $query = "UPDATE registration SET status = 'Unapproved' WHERE id = {$the_user_id} ";
      $napprove_user_query = mysqli_query($connection, $query);
      header("Location: users.php");
  }

  if(isset($_GET['delete']))
  {
    $the_user_id = $_GET['delete'];

    $query = "DELETE FROM registration WHERE id = {$the_user_id} ";

     $delete_user_query = mysqli_query($connection,$query);

     header("Location: users.php");
  }

  ?>
