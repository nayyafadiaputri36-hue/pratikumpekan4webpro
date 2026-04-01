<?php
// Konfigurasi database
$host = "localhost"; // host tempat lokasi database
$username = "root";  // username dari database
$password = "";      // password dari database
$database = "modul_webpro"; // nama database/schema

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];

        // Query untuk memasukkan data
        $sql = "INSERT INTO data_Mahasiswa (nim, nama, jurusan) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nim, $nama, $jurusan);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }
}

$conn->close();
?>