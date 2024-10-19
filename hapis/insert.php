<?php
    include "server/database.php";
    
    if(isset($_POST["tombol"])){
        $nama = $_POST['nama'];
        $sekolah =  $_POST['sekul'];
        $tempat_lahir = $_POST['tpl'];
        $tggl_lahir = $_POST['tgl'];
        $jk = $_POST['Jenis_Kelamin'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nomor'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];   
        $nisn = $_POST['NISN'];
        $status = $_POST['setatus'];

        $sql = "INSERT INTO sigma (Nama_lengkap, sekul, Tempat_lahir, Tanggal_lahir, Jenis_kelamin,
         Alamat, Nomor_telepon, Agama, Email, jurusann, NISN, setatus) VALUE ('$nama','$sekolah', '$tempat_lahir', 
         '$tggl_lahir', '$jk', '$alamat', '$nohp', '$agama', '$email', '$jurusan', '$nisn', '$status') ";

        if ($db->query($sql)){
            header('location: tabeladmin.php');
        }
            else{
            echo "ga jalan bang";
        }}
    
?>
<!-- REGISTRASI/PENDAFTARAN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regist</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <form action="insert.php" method="POST">
        <div class="register-container">
        <h2>Formulir Pendaftaran</h2>
            <label>Nama Lengkap : </label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required> 
            <label>Asal Sekolah SMP :</label>
            <input type="text" placeholder="Asal Sekolah (SMP)" name="sekul" required>
            <label>Tempat Lahir :</label>
            <input type="text" placeholder="Tempat Lahir" name="tpl" required>
            <label>Tanggal lahir :</label>
            <input type="date" name="tgl">
            <label>Jenis Kelamin :</label>
            <select name="Jenis_Kelamin">
                <option disabled selected>--Jenis Kelamin--</option>
                <option>Laki-Laki</option>
                <option>Perempuan</option>
            </select>
       
            <label>Alamat</label>
            <input type="text" placeholder="Alamat Lengkap" name="alamat">
        
            <label for="">Nomor Telepon</label>
            <input type="number" placeholder="masukkan nomor telepon" name="nomor">
        
            <label for="">Agama</label>
            <select name="agama" required>
                <option disabled selected>--Agama--</option>
                <option >Islam</option>
                <option >Kristen</option>
                <option >Katolik</option>
                <option >Hindu</option>
                <option >Budha</option>
                <option >Konghucu</option>
            </select>
       
            <label for="">Email : </label>
            <input type="email" name="email" placeholder="masukkan email">
        
            <label for="">Jurusan</label>
            <select name="jurusan">
                <option value="" disabled selected>--Pilih Jursuan--</option>
                <option value="Desain bangunan">Desain bangunan</option>
                <option value="Teknik Konstruksi">Teknik Konstruksi</option>
                <option value="Teknik Kendaraan">Teknik Kendaraan</option>
                <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Listrik">Teknik Listrik</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option value="Perhotelan">Perhotelan</option>
            </select>
            <label for="">NISN</label>
            <input type="number" name="NISN" placeholder="masukkan NISN" id="">
            <label>Status: </label>
            <select name="setatus" required>
                <option>Menunggu</option>
                <option>Diterima</option>
                <option>Ditolak</option>
            </select>

            <button type="submit" name="tombol">Tambah</button>
            
    </div>
    </form>

</body>
</html>