<?php 
include "server/admin.php";
include "style/login.html";

if(isset($_POST['admint'])) {
    $nama = $_POST['nama'];
    $password = $_POST['pw'];

    $dt = "SELECT * FROM adminnn where
    nama ='$nama' and password= '$password'";
    $result = $db->query($dt);

    if ($result-> num_rows > 0){
        header("location: tabeladmin.php");
        exit;
    }
}
?>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #2980b9, #6dd5fa, #ffffff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #34495e;
            font-size: 24px;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="name"],
        input[type="password"] {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input[type="name"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.2);
        }

        button {
            padding: 15px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1f6391;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                max-width: 100%;
            }

            input[type="name"],
            input[type="password"],
            button {
                padding: 12px;
                font-size: 16px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Masuk Sebagai Admin</h1>
        <form action="etmin.php" method="POST">
            <input type="name" placeholder="Nama Admin" name="nama" required>
            <input type="password" placeholder="Masukkan Password" name="pw" required>
            <button type="submit" name="admint">Masuk</button>
        </form>

    </div>
</body>
</html>