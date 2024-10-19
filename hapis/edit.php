<?php
    include "server/database.php";
    session_start();
    
    if (isset($_SESSION["is_login"])) {
        header("location: edit.php");
        exit;
    }
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $query = "SELECT * FROM sigma WHERE id = '$id'";
        $result = mysqli_query($db, $query);
        $data = mysqli_fetch_assoc($result);
    
        if (!$data) {
            echo "Data tidak ditemukan!";
            exit;
        }
    }
    
    if(isset($_POST["edit"])){
        $nama = $_POST['nama'];
        $sekolah =  $_POST['sekul'];
        $tempat_lahir = $_POST['tpl'];
        $tggl_lahir = $_POST['tgl'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['nomor'];
        $agama = $_POST['agama'];
        $email = $_POST['email'];
        $jurusan = $_POST['jurusan'];   
        $nisn = $_POST['NISN'];
        $status = $_POST['setatus'];

        $update_query = "UPDATE sigma SET 
                            Nama_lengkap = '$nama', 
                            sekul = '$sekolah', 
                            Tempat_lahir = '$tempat_lahir', 
                            Tanggal_lahir = '$tggl_lahir', 
                            Alamat = '$alamat',
                            Nomor_telepon = '$nohp', 
                            Agama = '$agama', 
                            Email = '$email', 
                            jurusann = '$jurusan', 
                            NISN = '$nisn',
                            `setatus` = '$status'
                        WHERE id = '$id'";
    
        if (mysqli_query($db, $update_query)) {
            header("location: tabeladmin.php");
            exit;
        } else {
            echo "Gagal memperbarui data: " . mysqli_error($db);
     }
    }
    ?>
<!-- REGISTRASI/PENDAFTARAN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
<form action="edit.php?id=<?php echo $id; ?>" method="POST">
<div class="register-container">
        <h2>Edit Data</h2>
            <label>Nama Lengkap : </label>
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" value="<?php echo $data ['Nama_lengkap']; ?>" required> 
            <label>Asal Sekolah SMP :</label>
            <input type="text" placeholder="Asal Sekolah (SMP)" name="sekul" value="<?php echo $data ['sekul']; ?>" required>
            <label>Tempat Lahir :</label>
            <input type="text" placeholder="Tempat Lahir" name="tpl" value="<?php echo $data ['Tempat_lahir']; ?>" required>
            <label>Tanggal lahir :</label>
            <input type="date" name="tgl" value="<?php echo $data ['Tanggal_lahir']; ?>" >
            <label>Jenis Kelamin :</label>
            <input type="text" name="Jenis_Kelamin" value="<?php echo $data ['Jenis_kelamin']; ?>">
       
            <label>Alamat</label>
            <input type="text" placeholder="Alamat Lengkap" name="alamat" value="<?php echo $data ['Alamat']; ?>">
        
            <label for="">Nomor Telepon</label>
            <input type="number" placeholder="masukkan nomor telepon" name="nomor" value="<?php echo $data ['Nomor_telepon']; ?>">
        
            <label for="">Agama</label>
            <input type="text" name="agama" value="<?php echo $data ['Agama']; ?>" required>
       
            <label for="">Email : </label>
            <input type="email" name="email" placeholder="masukkan email" value="<?php echo $data ['Email']; ?>">
        
            <label for="">Jurusan</label>
            <input type="text" name="jurusan" value="<?php echo $data ['jurusann']; ?>">

            <label for="">NISN</label>
            <input type="number" name="NISN" placeholder="masukkan NISN" id="" value="<?php echo $data ['NISN']; ?>">

            <label>Status: </label>
            <select name="setatus" required>
                <option value="Menunggu" <?php echo $data['setatus'] == 'Menunggu' ? 'selected' : ''; ?>>Menunggu</option>
                <option value="Diterima" <?php echo $data['setatus'] == 'Diterima' ? 'selected' : ''; ?>>Diterima</option>
                <option value="Ditolak" <?php echo $data['setatus'] == 'Ditolak' ? 'selected' : ''; ?>>Ditolak</option>
            </select>

            <button type="submit" name="edit">Update Data</button>
    </div>
    </form>

</body>
</html>
