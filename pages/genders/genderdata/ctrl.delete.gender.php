<?php

require '../../../includes/conn.php';

$id = $_GET['gender_id'];

echo $id;





$delete_genders = mysqli_query($conn, "DELETE FROM tbl_genders WHERE gender_id = '$id'");

header("location: ../list.gender.php");
?>