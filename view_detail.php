<?php
// view_detail.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = $id");

if (mysqli_num_rows($query) == 0) {
    die("Data tidak ditemukan.");
}

$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">Detail Pengguna</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td><?php echo htmlspecialchars($data['nim']); ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo htmlspecialchars($data['email']); ?></td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td><?php echo htmlspecialchars($data['kelas']); ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo htmlspecialchars($data['jenis_kelamin']); ?></td>
                    </tr>
                    <tr>
                        <th>Saran</th>
                        <td><?php echo htmlspecialchars($data['saran']); ?></td>
                    </tr>
                </table>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
