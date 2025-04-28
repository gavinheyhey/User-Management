<?php
require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    
    $check_gender = mysqli_query($conn, "SELECT * FROM tbl_genders WHERE gender = '$gender'");
    $result_gender = mysqli_num_rows($check_gender);
    
    if($result_gender == 0)  {

    

    $insert_user = mysqli_query($conn, "INSERT INTO tbl_genders (gender) VALUES ('$gender')" );
    header("location: ../list.gender.php");
    } 
 else {
    header("location: ../add.gender.php");
}
}


 




?>