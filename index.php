<?php
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

$query = mysqli_query($conn, "SELECT * FROM user ORDER BY id_user DESC");
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
    <section class="container-fluid">
        <section class="row justify-content-center">
        <section class="col-12">
        <div class="card text-center">
        <div class="card-header">
            <a href="input_data.php" class="btn btn-primary">Input Contact Form</a>
        </div>
        <br/>
        <?php 
            if (isset($_GET['pesan'])) {
                $pesan = $_GET['pesan'];
                if ($pesan == "input") {
                    echo '<div class="alert alert-success" role="alert">
                            Data Berhasil Di Simpan!
                          </div>';
                } else if ($pesan == "delete") {
                    echo '<div class="alert alert-success" role="alert">
                            Data Berhasil Di Hapus!
                          </div>';
                } else if ($pesan == "update") {
                    echo '<div class="alert alert-success" role="alert">
                            Data Berhasil Di Update!
                          </div>';
                }
            }
        ?>
        <div class="card-body">
            <h5 class="card-title">Contact From</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Nim</td>
                        <td>Email</td>             
                        <td>Kelas</td>
                        <td>Jenis Kelamin</td>
                        <td>Saran</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                <?php if (mysqli_num_rows($query) > 0) { ?>
                <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo htmlspecialchars($data["nama"]) ?></td>
                        <td><?php echo htmlspecialchars($data["nim"]) ?></td>
                        <td><?php echo htmlspecialchars($data["email"]) ?></td>
                        <td><?php echo htmlspecialchars($data["kelas"]) ?></td>
                        <td><?php echo htmlspecialchars($data["jenis_kelamin"]) ?></td>
                        <td><?php echo htmlspecialchars($data["saran"]) ?></td>
                        <td>
                            <a href="view_detail.php?id=<?php echo $data['id_user']; ?>" class="btn btn-info btn-sm">Detail</a>
                        </td>            
                    </tr>
                <?php $no++; } ?>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            
        </div>
        </div>
        </section>
        </section>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
