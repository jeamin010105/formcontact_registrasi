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

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $saran = $_POST['saran'];

    // Check if any required field is empty
    if (empty($nama) || empty($nim) || empty($email) || empty($kelas) || empty($jenis_kelamin)) {
        // Redirect back with an error message
        header("Location: input_data.php?error=empty_fields");
        exit();
    } else {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO user (nama, nim, email, kelas, jenis_kelamin, saran) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nama, $nim, $email, $kelas, $jenis_kelamin, $saran);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect with success message
            header("Location: index.php?pesan=input");
            exit();
        } else {
            // Handle errors
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}

$conn->close();
?>
