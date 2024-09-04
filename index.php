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

$query = mysqli_query($conn,"SELECT * FROM user ORDER BY id_user DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<!-- costum css -->
<link rel="stylesheet" href="style.css">
</head>
 
<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12">
        <div class="card text-center">
        <div class="card-header">
            <a href="input_data.php" class="btn btn-primary">Input Contact Form</a>
        </div>
        <br/>
        <?php 
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                    echo '<div class="alert alert-success" role="alert">
                            Data Berhasil Di Simpan!
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
                    </tr>
                </thead>
                <tbody>
                <?php if(mysqli_num_rows($query)>0){ ?>
                <?php
                    $no = 1;
                    while($data = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["nama"] ?></td>
                        <td><?php echo $data["nim"] ?></td>
                        <td><?php echo $data["email"] ?></td>
                        <td><?php echo $data["kelas"] ?></td>
                        <td><?php echo $data["jenis_kelamin"] ?></td>
                        <td><?php echo $data["saran"] ?></td>            
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

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>