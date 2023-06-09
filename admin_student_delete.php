<?php 
include 'dbcon.php';

  $user_id = $_GET['user_id'];

  $sql = "UPDATE tbl_user_status SET status = 0 WHERE status_id = (SELECT user_id FROM tbl_userinfo WHERE user_id = '$user_id')";
  $result = mysqli_query($conn, $sql);

  header("Location: admin_student.php?msg=Delete successfully");
  exit();
?>