<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];




$del_dtl = "delete from tbl_kerusakan_dtl
where id_kerusakan = '$id'";
$q_del_dtl = mysqli_query($conn, $del_dtl);

$del = "delete from tbl_kerusakan
where id_kerusakan = '$id'";
$q_del = mysqli_query($conn, $del);

?>