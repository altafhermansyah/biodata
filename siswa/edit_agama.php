<?php
include "../config/conn.php";
$id = $_GET['id'];

$query = "SELECT * FROM agama WHERE id = $id";

$exe = mysqli_query($conn, $query);
$data = mysqli_fetch_array($exe);

$id = $data['id'];
$nm_agama = $data['nm_agama'];
?>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Agama</title>
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
</head>

<body>
    <!-- Form Update Data -->
    <div class="container p-3">
        <h4>Update Agama </h4>
        <form method="post" action="../controller/agama/update_agama.php">
            Nama Agama:<br>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="text" value="<?= $nm_agama ?>" name="nm_agama" required>
            <br>
            <br><br>
            <input type="submit" name="save" value="submit">
        </form>
    </div>
</body>
<script src="../style/js/bootstrap.min.js"></script>

</html>