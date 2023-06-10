<?php
include 'dbcon.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$suffix = $_POST['suffixname'];
$email = $_POST['email'];
$contact = $_POST['contact_number'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$admittype = $_POST['admittype'];
$grade = $_POST['grade'];
$strand = $_POST['program'];
$term = $_POST['term'];
$last = $_POST['last'];
$program = $_POST['program'];
$lrn = $_POST['lrn'];
$username = $_POST['username'];
$password = $_POST['password'];
$cfpassword = $_POST['cfpassword'];
$encrypted = password_hash($password, PASSWORD_DEFAULT);

//validation here

$sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, suffix, gender, birthday, age, strand, lrn)
VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$birthday', '$grade', '$strand', '$lrn')";

$result = mysqli_query($dbconn, $sql);
?>