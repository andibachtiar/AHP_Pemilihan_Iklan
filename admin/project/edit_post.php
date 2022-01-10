<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id=$_POST['id'];

$nm_project=$_POST['nm_project'];
$nm_client=$_POST['nm_client'];
$keterangan_project=$_POST['keterangan_project'];


$sql="update tbl_project set					   
nm_project='$nm_project',
nm_client='$nm_client',
keterangan_project='$keterangan_project'
where id_project = '$id'";
$result=mysqli_query($conn, $sql);



echo "
<script type='text/javascript'>
document.location='../index.php?page=project';
</script>";
		
				
?>