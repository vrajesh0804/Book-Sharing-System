<?php


   if(isset($_POST['create_post'])) {

            $post_title        = escape($_POST['title']);
            $post_user         = escape($_POST['post_user']);
            $post_category_id  = escape($_POST['post_category']);
            $post_status       = escape($_POST['post_status']);

            $post_image        = escape($_FILES['image']['name']);
            $post_image_temp   = escape($_FILES['image']['tmp_name']);


            $post_tags         = escape($_POST['post_tags']);
            $post_content      = escape($_POST['post_content']);
            $post_date         = escape(date('d-m-y'));


        move_uploaded_file($post_image_temp, "../images/$post_image" );


      $query = "INSERT INTO posts(post_category_id, post_title, post_user, post_date,post_image,post_content,post_tags,post_status) ";

      $query .= "VALUES({$post_category_id},'{$post_title}','{$post_user}',now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}') ";

      $create_post_query = mysqli_query($connection, $query);

      confirmQuery($create_post_query);

      $the_post_id = mysqli_insert_id($connection);


      echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";



   }




?>

  
