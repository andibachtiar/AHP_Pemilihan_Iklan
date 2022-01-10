<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];




$del_dtl = "delete from tbl_project
where id_project = '$id'";
$q_del_dtl = mysqli_query($conn, $del_dtl);

$del = "delete from tbl_ide
where id_project = '$id'";
$q_del = mysqli_query($conn, $del);

?>