<?php
// Konfigurasi database
$host = "localhost"; // host tempat lokasi database dapat diganti dengan alamat server yang akan digunakan
$username = "root";  // username dari database
$password = "";      // password dari database
$database = "modul_webpro"; // Nama database/schema yang ingin digunakan

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi ke database berhasil!";
}

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    // Data yang akan dimasukkan pastikan sesuai kolom database
    $nim = "12345678";
    $nama = "Budi Santoso";
    $jurusan = "Teknik Informatika";

    // Query untuk memasukkan data
    $sql = "INSERT INTO Data_Mahasiswa (NIM, Nama, Jurusan) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nim, $nama, $jurusan);

    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan";
    } else {
        echo $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>