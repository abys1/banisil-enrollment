<?php
include 'dbcon.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$suffix = $_POST['suffixname'];
$email = $_POST['email'];
$contact = $_POST['contact_number'];
$age = $_POST['age'];
$birthday = $_POST['birthday'];
$street = $_POST['street'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$grade = $_POST['grade'];
$strand = $_POST['strand'];

//validation here


$sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, suffix, gender, birthday, age)
VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '', '$birthday', '$age')";

if($conn->query($sql) === TRUE) {
    $userinfo_id = $conn->insert_id;
    $sql = "INSERT INTO tbl_contactinfo (userinfo_id, email, contact_num, city, barangay, street) VALUES ('$userinfo_id', '$email', '$contact', '$city', '$barangay', '$street')";

    if($conn->query($sql) === TRUE){
        $sql = "INSERT INTO tbl_enrollment (userinfo_id, admit_type, grade, program, term, lrn, lsa) VALUES ('$userinfo_id', '', '$grade', '$strand', '', '', '')";

        if($conn->query($sql) === TRUE){
            $sql = "INSERT INTO tbl_user_level (userinfo_id, level) VALUES ('$userinfo_id', 'TEACHER')";

            if($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO tbl_user_status (userinfo_id, status) VALUES ('$userinfo_id', 0)";

                if($conn->query($sql) === TRUE){
                    header("Location: admin_teacher.php?msg=Teacher Account Added Successfully");
                    exit();
                }
            }
        }
    }
}
?>