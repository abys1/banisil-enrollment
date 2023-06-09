<?php
  include 'dbcon.php';

  if(isset($_POST['btnSave'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $grade = $_POST['grade'];
    $strand = $_POST['strand'];
    $lrn = $_POST['lrn'];
    
    // Validation

    $query = "SELECT user_id FROM tbl_userinfo LIMIT 1";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $userinfo_id = $row['user_id'];
      
      $updateQuery = "UPDATE tbl_userinfo SET firstname = '$firstname', lastname = '$lastname', grade = '$grade', strand = '$strand', lrn = '$lrn' WHERE user_id = '$userinfo_id'";
      $updateResult = mysqli_query($conn, $updateQuery);

      if ($updateResult && mysqli_affected_rows($conn) > 0) {
        header("Location: admin_student.php?Record updated successfully");
        echo "Record updated successfully.";
        exit();
      } else {
        echo "Error updating record or no matching record found.";
      }
    } else {
      echo "No records found in the tbl_userinfo table.";
    }

    mysqli_close($conn);
  }
?>