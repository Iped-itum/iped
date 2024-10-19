<?php
    session_start();
    include "server/database.php";
    include "style/login.html";


    if(isset($_SESSION["is_login"])){
        header("location: dasbor.php");
        exit;
    }

    if(isset($_POST['tekan'])) {
        $email = $_POST['email'];
        $nisn = $_POST['nisn'];

        $sql = "SELECT * FROM sigma where 
        Email='$email' and NISN = '$nisn'";
        $hasil = $db->query($sql);


        if($hasil->num_rows > 0){
           $data = mysqli_fetch_array($hasil);
           $_SESSION["ID"] = $data["ID"];
           $_SESSION["Nama_lengkap"] = $data["Nama_lengkap"];
           $_SESSION["NISN"] = $data["nisn"];
           $_SESSION["is_login"] = true;
           header (header: "location: dasbor.php");
            exit;

        }
        elseif
            ($email == 'woyadmin@gmail.com' && $nisn =='69'){
                header('location: etmin.php');
            
    
        }
        else {

            echo "<script> alert('Login Gagal, Email atau NISN mungkin salah'); </script>";
        }

    }
?>

<!-- LOGIN -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST">
            <h3>SILAHKAN MASUKKAN AKUN</h3> <hr>
            <div class="nama">
            <input type="email" placeholder="Masukkan Email" name="email" required>
            </div>
            <div>
            <input type="text" placeholder="NISN (Nomor Induk Siswa Nasional)" name="nisn" required>
            </div>
            <button type="submit" name="tekan">Login</button>

            <p>Belum punya akun? <a href="register.php">Buat akun sekarang</a></p>

        </form>

    </div>

</body>
</html>