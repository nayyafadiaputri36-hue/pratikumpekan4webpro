<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php include 'read.php'; ?>
    </tbody>
</table>

<br>

<!-- Tombol aksi -->
<button onclick="location.href='form_input.html'">Tambah Data</button>
<button onclick="location.href='form_update.html'">Update Data</button>
<button onclick="location.href='form_delete.html'">Hapus Data</button>

</body>
</html>