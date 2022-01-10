<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];

$del = "delete from tbl_creator_dtl
where id_creator_dtl = '$id'";
$q_del = mysqli_query($conn, $del);
?>