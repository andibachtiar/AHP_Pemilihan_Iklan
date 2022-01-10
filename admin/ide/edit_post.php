<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id=$_POST['id'];
$id_project=$_POST['id_project'];
$id_creator=$_POST['id_creator'];


$talent=$_POST['talent'];
$wardrop=$_POST['wardrop'];
$lokasi=$_POST['lokasi'];
$tempat=$_POST['tempat'];

$brodcase=$_POST['brodcase'];
$durasi=$_POST['durasi'];
$tgl_ide=$_POST['tgl_ide'];


$sql="update tbl_ide set	
id_project='$id_project',
id_creator='$id_creator',
talent='$talent',
wardrop='$wardrop',
lokasi='$lokasi',
tempat='$tempat',
brodcase='$brodcase',
durasi='$durasi',
tgl_ide='$tgl_ide'
where id_ide = '$id'";
$result=mysqli_query($conn, $sql);

//echo $sql;

echo "
<script type='text/javascript'>
document.location='../index.php?page=ide_detail&id=$id';
</script>";

				
?>