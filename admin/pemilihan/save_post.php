<?php
include "../../conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");

$id_project = $_POST["id_project"];
$sql_p="update tbl_project set					   
stts_project = '1'
where id_project = '$id_project' ";
$result_p=mysqli_query($conn, $sql_p);


$sql_i="update tbl_ide set					   
talent_value = '0',
wardrop_value = '0',
lokasi_value = '0',
tempat_value = '0',
brodcase_value = '0',
durasi_value = '0'
where id_project = '$id_project' ";
$result_i=mysqli_query($conn, $sql_i);


$dataTalent = array();	
$dataWardrop = array();	
$dataLokasi = array();	
$dataTempat = array();	
$dataBrodcase = array();	
$dataDurasi = array();	

$getDataTalent = "";
$getDataWardrop = "";
$getDataLokasi = "";
$getDataTempat = "";
$getDataBrodcase = "";
$getDataDurasi = "";


for ($i=0;$i<sizeof($_POST['chkBox']);$i++) {
			$box = $_POST["chkBox"][$i];
			//$id_ide_talent=$_POST['id_ide_talent_'][$i];
			
			error_reporting(E_ALL ^ ( E_NOTICE | E_WARNING));
			$id_ide_talent = $_POST["id_ide_talent_$box"];
			$id_ide_wardrop = $_POST["id_ide_wardrop_$box"];
			$id_ide_lokasi = $_POST["id_ide_lokasi_$box"];
			$id_ide_tempat = $_POST["id_ide_tempat_$box"];
			$id_ide_brodcase = $_POST["id_ide_brodcase_$box"];
			$id_ide_durasi = $_POST["id_ide_durasi_$box"];
			
			
			if(!empty($id_ide_talent)){
				array_push($dataTalent, $id_ide_talent);
				$getDataTalent= implode(",",$dataTalent);				
			}
			if(!empty($id_ide_wardrop)){
				array_push($dataWardrop, $id_ide_wardrop);
				$getDataWardrop= implode(",",$dataWardrop);
			}
			if(!empty($id_ide_lokasi)){
				array_push($dataLokasi, $id_ide_lokasi);
				$getDataLokasi= implode(",",$dataLokasi);
			}
			if(!empty($id_ide_tempat)){
				array_push($dataTempat, $id_ide_tempat);
				$getDataTempat= implode(",",$dataTempat);
			}
			if(!empty($id_ide_brodcase)){
				array_push($dataBrodcase, $id_ide_brodcase);
				$getDataBrodcase= implode(",",$dataBrodcase);
			}
			if(!empty($id_ide_durasi)){
				array_push($dataDurasi, $id_ide_durasi);
				$getDataDurasi= implode(",",$dataDurasi);
			}
			
}

if(!empty($getDataTalent)){
	//echo $getDataTalent;
	
	$sql="update tbl_ide set					   
	talent_value = '1'
	where id_ide in ($getDataTalent)";
	$result=mysqli_query($conn, $sql);
}
if(!empty($getDataWardrop)){
	$sql="update tbl_ide set					   
	wardrop_value = '1'
	where id_ide in ($getDataWardrop)";
	$result=mysqli_query($conn, $sql);
}
if(!empty($getDataLokasi)){
	$sql="update tbl_ide set					   
	lokasi_value = '1'
	where id_ide in ($getDataLokasi)";
	$result=mysqli_query($conn, $sql);
}
if(!empty($getDataTempat)){
	$sql="update tbl_ide set					   
	tempat_value = '1'
	where id_ide in ($getDataTempat)";
	$result=mysqli_query($conn, $sql);
}
if(!empty($getDataBrodcase)){
	$sql="update tbl_ide set					   
	brodcase_value = '1'
	where id_ide in ($getDataBrodcase)";
	$result=mysqli_query($conn, $sql);
}
if(!empty($getDataDurasi)){
	$sql="update tbl_ide set					   
	durasi_value = '1'
	where id_ide in ($getDataDurasi)";
	$result=mysqli_query($conn, $sql);
}
			
$sql_cek = "
select id_ide, id_project, id_creator, (talent_value + wardrop_value + lokasi_value + tempat_value + brodcase_value + durasi_value)total from tbl_ide
where id_project = '$id_project'
ORDER BY (talent_value + wardrop_value + lokasi_value + tempat_value + brodcase_value + durasi_value) desc limit 1
";
$q_cek = mysqli_query($conn, $sql_cek) or die("Error Executing The Data(s)");
$count_cek = mysqli_num_rows($q_cek);													
$data_row_cek = mysqli_fetch_array($q_cek);

$sql_u="update tbl_ide set					   
stts_ide = '1'
where id_ide = '$data_row_cek[id_ide]' ";
$result_u=mysqli_query($conn, $sql_u);


echo "
<script type='text/javascript'>
document.location='../index.php?page=pemilihan_result&id=$id_project';
</script>";
						
?>