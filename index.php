<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN - BIODATA SISWA</title>
    <link rel="stylesheet" href="style/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-3 text-center justify-content-center">
        <form action="controller/login.php" method="post">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
                }
            }
            ?>
            <div class="input p-2">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input p-2">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input p-2">
                <button name="submit" class="btn bg-primary text-white">Login</button>
            </div>
        </form>
        <div class="container">
            <h6>Anda belum punya akun <a href="register.php"> Register?</a></h6>
        </div>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>