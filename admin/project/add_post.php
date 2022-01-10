<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$nm_project=$_POST['nm_project'];
$nm_client=$_POST['nm_client'];
$keterangan_project=$_POST['keterangan_project'];
$id_user=$_POST['id_user'];


$sql="INSERT INTO tbl_project(					   
nm_project,
nm_client,
keterangan_project,
id_user
)VALUES(
'$nm_project',
'$nm_client',
'$keterangan_project',
'$id_user'
)";
$result=mysqli_query($conn, $sql);



echo "
<script type='text/javascript'>
document.location='../index.php?page=project';
</script>";
			
			
?>