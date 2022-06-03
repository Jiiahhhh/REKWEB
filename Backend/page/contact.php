<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbawa Barat</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <header id="header">
        <a href="#" class="logo">Gerak</a>
        <ul>
            <li><a href="../index.php" onclick="toggle()">Home</a></li>
            <li><a href="" onclick="toggle()">About Us</a></li>
            <li><a href="contact.php" class="active" onclick="toggle()">Contact Us</a></li>
        </ul>
        <a class='login-nav' href="page/login.php">Register</a>
        <div class="toggle" onclick="toggle()"></div>
    </header>

    <div class="sosmed">
        <h1>SOSIAL MEDIA</h1>
        <div class="social-media">
            <a href="" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <script type="text/javascript">
        function toggle() {
            var header = document.getElementById("header")
            header.classList.toggle('active')
        }
    </script>
</body>

</html>