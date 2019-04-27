<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$dbname = "esandarc_formweb";
$connect = mysqli_connect($hostmysql,$username,$password);
$db_select = mysqli_select_db($connect,$dbname);
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 //username hosting : esandarc_userfo
//password hosting = Esandar2019!
?>