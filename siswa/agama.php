<?php
include '../config/conn.php';
session_start();
if ($_SESSION['level'] == "") {
    header("Location: ../index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Agama</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
    <div class="container p-3">
        <h3>Kelola Agama</h3>
    </div>
    <div class="container p-4">
        <h5>Tambah Agama : </h5>
        <form method="post" action="../controller/agama/tambah_agama.php">
            <label for="">Nama Agama :</label>
            <input type="text" name="nm_agama" required>
            <br><br>
            <input type="submit" name="save" value="Tambah">
        </form>
    </div>
    <div class="container p-4">
        <table border="1" width="85%" align="center" class="table">
            <thead>
                <tr>
                    <th width="10%">No</th>
                    <th width="70%">Nama Agama</th>
                    <th width="20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT * FROM agama";
                $query = mysqli_query($conn, $sql);
                while ($agama = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $agama['nm_agama'] ?></td>
                        <td>
                            <button type="button" class="btn bg-primary"> <a href="edit_agama.php?id=<?= $agama['id'] ?>" class="text-decoration-none text-white"> Update </a> </button> |
                            <button type="button" class="btn bg-danger"><a href="../controller/agama/hapus_agama.php?id=<?= $agama['id'] ?>" class="text-decoration-none text-white"> Delete </a></button>
                        </td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    <div class="container p-4">
        <button class="btn bg-secondary text-white"><a href="siswa_admin.php" class="text-decoration-none text-white">Go Back</a></button>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>