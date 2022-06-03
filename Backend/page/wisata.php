<?php 
session_start();

if (!isset($_SESSION['$login'])) {
  header("Location: login.php");
  exit;
}

require '../db/functions.php';

$data = query("SELECT * FROM wisata");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/wisata.css">
</head>
<body>
    <header id="header">
        <a href="#" class="logo">Gerak</a>
        <ul>
            <li><a href="../index.php" class="active" onclick="toggle()">Home</a></li>
            <li><a href="" onclick="toggle()">About Us</a></li>
            <li><a href="contact.php" onclick="toggle()">Contact Us</a></li>
        </ul>
        <a class='login-nav' href="page/login.php">Register</a>
        <div class="toggle" onclick="toggle()"></div>
    </header>

    <div class="item">
    <section>
        <?php foreach($data as $d): ?>
        <div class="card">
            <div class="box">
                <div class="imgBx">
                    <img src="../img/<?= $d['image'] ?>">
                </div>
                <div class="contentBx">
                    <div>
                        <h2><?= $d['judul'] ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </section>
    </div>
</body>
</html>