<?php
if(!empty($_POST["user_name"]) and !empty($_POST["password"])){
session_start();
include "koneksi.php";
$pass=$_POST['password'];
$sql_adm = "
select * from tbl_user 
where username_user = '$_POST[user_name]' and password_user = '$pass'
";
$q_adm = mysqli_query($conn, $sql_adm);
$data_adm = mysqli_fetch_array($q_adm);
$count_pk_row = mysqli_num_rows($q_adm);		

if($count_pk_row > 0)
{
	$_SESSION['login_sess_admin'] = $data_adm["id_user"];
	echo "<script type='text/javascript'>
		  document.location='../admin/index.php'; 
		  </script>";
}else{
?>

<script type="text/javascript">
			 alert('Username atau Password salah...!');
			 document.location='../index.php?page=login&p=3';
</script>
<?php	
}
}else{
?>
<script type="text/javascript">
			 alert('Username atau Password tidak boleh kosong...!');
			 document.location='../index.php?page=login&note=empty';
</script>
<?php	
}

?>