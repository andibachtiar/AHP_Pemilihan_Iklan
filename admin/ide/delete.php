<?php
include "../../conf/koneksi.php";
$id = $_GET['id'];


$del = "delete from tbl_ide
where id_ide = '$id'";
$q_del = mysqli_query($conn, $del);

?>