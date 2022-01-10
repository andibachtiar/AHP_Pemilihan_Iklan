<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_iklan";
$conn = mysqli_connect($hostname, $username, $password) or die("Koneksi Gagal");
$connect = mysqli_select_db($conn, $database) or die("Connection Error..!");
?>


<?php
$koneksi = mysqli_connect("localhost", "root", "");
if ($koneksi) {
	$db = mysqli_select_db($conn, "db_iklan");
	if ($db) {
		# jika database ada		
	} else {
		# jika database tidak ada
		echo "Database tidak ada<br>";
	}
} else {
	# jika database Mysql tidak terkoneksi
	echo "Mysql tidak terkoneksi<br>";
}
?>
<?php
$objConnect = mysqli_connect("localhost", "root", "") or die(mysqli_error($conn));
$objDB = mysqli_select_db($conn, "db_iklan");
?>