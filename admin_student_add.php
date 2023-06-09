<?php 
include 'dbcon.php';

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cfpassword =$_POST['password'];
  $encrypted = password_hash($password, PASSWORD_DEFAULT);
  $contact = $_POST['contact'];
  $gender = $_POST['gender'];
  $birthday = $_POST['birthday'];
  $age = $_POST['age'];
  $grade = $_POST['grade'];
  $strand = $_POST['strand'];
  $lrn = $_POST['lrn'];
  $street = $_POST['street'];
  $barangay = $_POST['barangay'];
  $city = $_POST['city'];

  $sql = "INSERT INTO tbl_userinfo (firstname, lastname, gender, birthday, age, grade, strand, lrn) VALUES ('$firstname', '$lastname', '$gender', '$birthday', '$age', '$grade', '$strand', '$lrn')";

  if($conn->query($sql) === TRUE){
    $userinfo_id = $conn->insert_id;
    $sql = "INSERT INTO tbl_usercredentials (userinfo_id, username, password) VALUES ('$userinfo_id', '$username', '$encrypted')";

    if($conn->query($sql) === TRUE){
      $sql = "INSERT INTO tbl_contactinfo (userinfo_id, contact_num, city, barangay, street) VALUES ('$userinfo_id', '$contact', '$city', '$barangay', '$street')";

      if($conn->query($sql) === TRUE){
        $sql = "INSERT INTO tbl_user_level (userinfo_id, level) VALUES ('$userinfo_id', 'STUDENT')";

        if($conn->query($sql) === TRUE){
          $sql = "INSERT INTO tbl_user_status (userinfo_id, status) VALUES ('$userinfo_id', 1)";

          if($conn->query($sql) === TRUE){
            header("Location: admin_student.php?msg=Added Successfully");
            exit();
          }
        }
      }
    }
  }
?>