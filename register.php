<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP - BIODATA SISWA</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
</head>

<body>
    <div class="container P-3 text-center">
        <form action="controller/daftar.php" method="post" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input p-2">
                <label for="">Nama :</label>
                <input type="text" placeholder="Tulis Disini" name="nama" required>
            </div>
            <div class="input p-2">
                <label for="">Username :</label>
                <input type="text" placeholder="Tulis Disini" name="username" required>
            </div>
            <div class="input p-2">
                <label for="">Password :</label>
                <input type="password" placeholder="Tulis Disini" name="password" required>
            </div>
            <div class="input p-2">
                <label for="">Confirm Password :</label>
                <input type="password" placeholder="Tulis Disini" name="cpassword" required>
            </div>
            <div class="input p-2">
                <label>Level : </label>
                <select name="level" class="level" required>
                    <option value="" disable selected>Pilih Level dari User</option>
                    <option value="1">Administrator</option>
                    <option value="2">Petugas</option>
                    <option value="3">Siswa</option>
                </select>
            </div>
            <div class="input p-2">
                <button name="submit" class="btn bg-success text-white">Daftar</button>
            </div>
        </form>
        <div class="container p-4">
            <h6>Sudah punya akun <a href="register.php"> Register?</a></h6>
        </div>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>