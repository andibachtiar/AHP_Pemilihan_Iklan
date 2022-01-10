<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];

$del = "delete from tbl_creator
where id_creator = '$id'";
$q_del = mysqli_query($conn, $del);

$del_ = "delete from tbl_creator_dtl
where id_creator = '$id'";
$q_del_ = mysqli_query($conn, $del_);
?>