<?php

session_start();

if (!isset($_SESSION['$login'])) {
  header("Location: login.php");
  exit;
}

require '../db/functions.php';

if(isset($_POST['submit'])){
    tambah_data($_POST);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sumbawa Barat</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="login">
        <div class="login-container">
            <div class="form-cont">
                <div class="inner-form">
                    <div class="login-header">
                        <h1>Tambah Data</h1>
                    </div>
    
                    <div class="login-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="login-form">
                                <label>Judul</label>
                                <input type="text" name="email" class="form-control" placeholder="Judul" id="inputUser" aria-describedby="namelHelp" autofocus autocomplete="off" required>
                            </div>
                            <div class="login-form">
                                <label>Gambar</label>
                                <input name="file" value="upload" type="file"  class="form-control password-field" id="password-field" required>
                            </div>
                            <button type="submit" name="submit" class="button btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>