<?php

session_start();

if (!isset($_SESSION['$login'])) {
  header("Location: login.php");
  exit;
}

require '../db/functions.php';

$data = query("SELECT * FROM wisata LIMIT 3");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbawa Barat</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header id="header">
        <a href="#" class="logo">Gerak</a>
        <ul>
            <li><a href="index.php" class="active" onclick="toggle()">Home</a></li>
            <li><a href="" onclick="toggle()">About Us</a></li>
            <li><a href="page/contact.php" onclick="toggle()">Contact Us</a></li>
        </ul>
        <a class='login-nav' href="logout.php">Logout</a>
        <div class="toggle" onclick="toggle()"></div>
    </header>

    <section>
        <div>
            <h1>SUMBAWA BARAT</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit libero asperiores unde, cupiditate ut.</p>
            <!-- <a href="">Lihat Semua</a> -->
        </div>
    </section>

    <main>
        <div class="wisata">
            <h1>Sebuah Mahakarya Tuhan</h1>
            <p>West Sumbawa Regency is a Regency of the Indonesian Province of West Nusa Tenggara. It is located on the island of Sumbawa and has an area of 1,742.27 km².</p>

            <div class="row">
                <?php foreach($data as $d): ?>
                <div class="wisata-col">
                    <img src="../img/<?= $d['image'] ?>" alt="image">
                    <div class="layer">
                        <h3><?= $d['judul'] ?></h3>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <a href="wisata.php">Lihat Semua</a>
            <a class="add-item" href="tambahdata.php">Tambah Data</a>
        </div>

        <div class="toleran">
            <h1>Toleransi yang indah</h1>
            <p>Penduduk dengan index presentasi paling toleran di indonesia</p>

            <div class="toleran-row">
                <div class="toleran-col">
                    <img src="../img/picture.png" alt="content">
                </div>
                <div class="toleran-col">
                    <h3>1001 Suku</h3>
                    <p>
                        West Sumbawa Regency is a Regency of the Indonesian Province of West Nusa Tenggara.
                    </p>
                </div>
            </div>
    
            <div class="toleran-row">
                <div class="toleran-col">
                    <img src="../img/picture.png" alt="content">
                </div>
                <div class="toleran-col">
                    <h3>Keagamaan</h3>
                    <p>
                        West Sumbawa Regency is a Regency of the Indonesian Province of West Nusa Tenggara.
                    </p>
                </div>
            </div>
    
            <div class="toleran-row">
                <div class="toleran-col">
                    <img src="../img/picture.png" alt="content">
                </div>
                <div class="toleran-col">
                    <h3>Petua</h3>
                    <p>
                        West Sumbawa Regency is a Regency of the Indonesian Province of West Nusa Tenggara.
                    </p>
                </div>
            </div>
        </div>

        <div class="tentangkami">
            <h1>Tentang Kami</h1>
            <p>West Sumbawa Regency is a Regency of the Indonesian Province of West Nusa Tenggara. It is located on the island of Sumbawa and has an area of 1,742.27 km².</p>

            <div class="us">
                <div class="anggota">
                    <img src="../img/rayyan.png" alt="">
                    <p>Rayyan</p>
                </div>
                <div class="anggota">
                    <img src="../img/asep.png" alt="">
                    <p>Asep</p>
                </div>
                <div class="anggota">
                    <img src="../img/farhan.png" alt="">
                    <p>Farhan</p>
                </div>
                <div class="anggota">
                    <img src="../img/ijlal.png" alt="">
                    <p>Ijlal</p>
                </div>
            </div>
        </div>

        <div class="hubungikami d-flex">
            <div class="image">
                <img src="../img/asep.png" alt="">
            </div>
            <div class="kontakkami">
                <h1>Hubungi Kami</h1>
                <p>West Sumbawa Regency is a Regency of the Indonesian Province of West Nusa Tenggara. It is located on the island of Sumbawa and has an area of 1,742.27 km².</p>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright© 2022 Sumbawa Barat. All right reserved</p>
    </footer>

    <script type="text/javascript">
        function toggle() {
            var header = document.getElementById("header")
            header.classList.toggle('active')
        }
    </script>
</body>

</html>