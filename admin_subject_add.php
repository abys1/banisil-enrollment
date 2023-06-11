<?php
include 'dbcon.php';

$strand = $_POST['strand'];
$grade = $_POST['grade'];
$subjects = $_POST['subject'];
$schedules = $_POST['schedules'];


$sql = "INSERT INTO tbl_subjects (strand, grade, subjects, schedules) VALUES ('$strand', '$grade', '$subjects', '$schedules')";

if($conn->query($sql) === TRUE){
    header("Location: admin_subject.php?msg=Subject Added Successfully");
    exit();
} else{
    header("Location: admin_subject.php?msg=Unavaible To Add Subject");
    exit();
}
?>