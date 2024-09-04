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
        <section class="col-12 col-sm-6 col-md-4">
                        
            <form action="proses_registrasi.php" method="post" class="form-container">   
                <h4 class="text-center font-weight-bold">Contact Form</h4>
                
                <!-- Tambahkan pesan kesalahan di sini -->
                <?php if(isset($_GET['error'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php
                        if ($_GET['error'] == 'empty_fields') {
                            echo "Semua Data wajib diisi!";
                        }
                        ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input name="nama" type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input name="nim" type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan Email">
                </div>                
                <div class="form-group">
                    <!-- Bootstrap select -->
                    <label for="kelas">Kelas</label><br/>
                    <select name="kelas" class="form-control" aria-label="Default select example">
                        <option selected value="T3A">Kelas T3A</option>
                        <option value="T3B">Kelas T3B</option>
                        <option value="T3C">Kelas T3C</option>
                        <option value="T3D">Kelas T3D</option>
                        <option value="T3E">Kelas T3E</option>
                        <option value="T3F">Kelas T3F</option>
                        <option value="T3G">Kelas T3G</option>
                        <option value="T3H">Kelas T3H</option>
                        <option value="T3I">Kelas T3I</option>
                        <option value="T3J">Kelas T3J</option>
                    </select>
                </div>
                <div class="form-group">
                    <!-- Bootstrap radio buttons -->
                    <label for="jenis_kelamin">Jenis Kelamin</label><br/>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki" checked>
                        <label class="form-check-label" for="laki-laki">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="saran" class="form-label">Saran</label>
                    <textarea class="form-control" name="saran" id="saran" rows="3"></textarea>
                </div>               
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                <hr/>
                <div class="d-flex flex-row-reverse bd-highlight">
                    <a href="index.php" class="text-center">Lihat Data!</a>
                </div>               
            </form>                      
        </section>
        </section>
    </section>

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan yang terakhir Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
