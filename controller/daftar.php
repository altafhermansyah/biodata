<?php
session_start();
include '../config/conn.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = hash('sha256', $_POST['password']);
	$cpass = hash('sha256', $_POST['cpassword']);
	$level = $_POST['level'];

	if ($password == $cpass) {
		$sql = "SELECT * FROM user WHERE username='$username'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user VALUES (NULL, '$nama', '$username', '$password', '$level')";
			$result = mysqli_query($conn, $sql);
			if($result){
				echo "<script>alert('Register Berhasil!'); document.location.href = '../index.php';</script>";
				$level = "";
			} else {
				echo "<script>alert('Terjadi Kesalahan.')</script>";
			}
		}else{
			echo "<script>alert('User Sudah Terdaftar.')</script>";
		}
	} else {
		echo "<script>alert('Password Tidak Sesuai')</script>";
	}
}
?>