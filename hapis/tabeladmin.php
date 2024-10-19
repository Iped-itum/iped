<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #3498db;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            max-width: 1200px;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .data-row {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #e74c3c;
            color: white;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #c0392b;
        }
</style>


</head>
<body>
    <h1>Selamat datang Admin</h1>
    <br>
    <br>
    <h4><a href="insert.php">Tambah Data Pengguna</a></h4>
    <table>
        <tr>
            <th>Nama</th>
            <th>Sekolah</th>
            <th>Tempat lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Nomor Telepon</th>
            <th>Agama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>NISN</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
<?php
include "server/database.php";

session_start();
if(isset($_POST["pencet"])){
    session_unset();
    session_destroy();
    header("location: index.php");
}


$dta = mysqli_query($db, "SELECT * FROM sigma");
while ($row = mysqli_fetch_array($dta)) {

?>

        <tr>
            <td><?= $row['Nama_lengkap'] ?></td>
            <td><?= $row['sekul']?></td>
            <td><?= $row['Tempat_lahir']?></td>
            <td><?= $row['Tanggal_lahir']?></td>
            <td><?= $row['Jenis_kelamin']?></td>
            <td><?= $row['Alamat']?></td>
            <td><?= $row['Nomor_telepon']?></td>
            <td><?= $row['Agama']?></td>
            <td><?= $row['Email']?></td>
            <td><?= $row['jurusann']?></td>
            <td><?= $row['NISN']?></td>
            <td><?= $row['setatus']?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['ID'];?>">Edit</a>
                <a href="hapus.php?var=<?php echo $row['ID'];?>">Hapus</a>
            </td>
        </tr>
        <?php
} 
?>
    </table>

    <div class="data-row">
        <form action="tabeladmin.php" method="POST">
            <button type="submit" name="pencet" onclick="return confirm('Apakah anda ingin Log out?')">Log Out</button>
        </form>
    </div>

</body>
</html>