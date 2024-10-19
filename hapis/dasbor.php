<?php
include "server/database.php";
include "style/login.html";

session_start();
if(isset($_POST["pencet"])){
    session_unset();
    session_destroy();
    header("location: index.php");
}

$id = $_SESSION["ID"];
$nama = $_SESSION["Nama_lengkap"];
$nisn = $_SESSION["NISN"];
$sql = "SELECT * FROM sigma WHERE ID = '$id'";
$hasil = mysqli_query($db, $sql);
$oh = mysqli_fetch_array($hasil);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/dasbor2.css">
</head>
<body>
    <div class="container">
        <h2 color="black">Data <?= $oh['Nama_lengkap'] ?></h2>

        <div class="data-row">
            <label>Nama:</label>
            <div class="value"><?=$oh['Nama_lengkap'] ?></div>
        </div>

        <div class="data-row">
            <label>Sekolah:</label>
            <div class="value"><?=$oh['sekul'] ?></div>
        </div>

        <div class="data-row">
            <label>Tempat Lahir:</label>
            <div class="value"><?=$oh['Tempat_lahir'] ?></div>
        </div>

        <div class="data-row">
            <label>Tanggal Lahir:</label>
            <div class="value"><?=$oh['Tanggal_lahir'] ?></div>
        </div>

        <div class="data-row">
            <label>Jenis Kelamin:</label>
            <div class="value"><?=$oh['Jenis_kelamin'] ?></div>
        </div>

        <div class="data-row">
            <label>Alamat:</label>
            <div class="value"><?=$oh['Alamat'] ?></div>
        </div>

        <div class="data-row">
            <label>Nomor Telepon:</label>
            <div class="value"><?=$oh['Nomor_telepon'] ?></div>
        </div>

        <div class="data-row">
            <label>Agama:</label>
            <div class="value"><?=$oh['Agama'] ?></div>
        </div>

        <div class="data-row">
            <label>Email:</label>
            <div class="value"><?=$oh['Email'] ?></div>
        </div>

        <div class="data-row">
            <label>Jurusan:</label>
            <div class="value"><?=$oh['jurusann'] ?></div>
        </div>

        <div class="data-row">
            <label>NISN:</label>
            <div class="value"><?=$oh['NISN'] ?></div>
        </div>

        <div class="data-row">
            <label for="">Status</label>
            <div class="value"><?=$oh['setatus']?></div>
        </div>
            <div class="data-row">
            <form action="dasbor.php" method="POST">
            <button type="submit" name="pencet" onclick="return confirm('Apakah anda ingin Log out?')">Log Out</button>
        </form>
        </div>
    </div>
</body>
</html>