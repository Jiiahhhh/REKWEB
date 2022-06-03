<?php

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'rekweb');
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1){
        return mysqli_fetch_assoc($result);
    }


    $rows = []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data){
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['sandi']);
    
    if ($user = query("SELECT * FROM user WHERE email = '$email' and sandi = '$password'")) {
        session_start();
        $_SESSION['$login'] = $user;
        $_SESSION['email'] = $user['email'];

        header("Location: index.php");
        exit;
    }

    return [
        'error' => true,
        'pesan' => 'Email/Sandi Salah'
    ];
}

function tambah_data($data) {
    $conn = koneksi();
    $title = htmlspecialchars($data['email']);
    $storage = '../img/';
    $lampiran = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $storage . $lampiran);
    $query = "INSERT INTO wisata VALUES ('', '$title', '$lampiran');";
    mysqli_query($conn, $query);
    header('Location: index.php');
}

?>