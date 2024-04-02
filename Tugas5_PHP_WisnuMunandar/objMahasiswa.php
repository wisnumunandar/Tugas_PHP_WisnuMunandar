<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 400px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form select, form input[type="text"], form input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        table {
            width: 60%;
            margin: 30px auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="objMahasiswa.php" method="post">
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">

        <label for="kuliah">Kuliah:</label>
        <select id="kuliah" name="kuliah">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
        </select>

        <label for="mata_kuliah">Mata Kuliah:</label>
        <select id="mata_kuliah" name="mata_kuliah">
            <option value="Pemrograman Web">Pemrograman Web</option>
            <option value="Basis Data">Basis Data</option>
            <option value="Jaringan Komputer">Jaringan Komputer</option>
        </select>

        <label for="nilai">Nilai:</label>
        <input type="text" id="nilai" name="nilai">

        <input type="submit" value="Submit">
    </form>
</div>

<?php
require_once 'Mahasiswa.php';

// Tangkap data dari form jika sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nim'], $_POST['nama'], $_POST['kuliah'], $_POST['mata_kuliah'], $_POST['nilai'])) {
    // Mengambil nilai dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    // Buat objek Mahasiswa baru dengan nilai dari form
    $mahasiswa_baru = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);
    
    // Cetak hasil dengan tabel
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>NIM</th>';
    echo '<th>Nama</th>';
    echo '<th>Kuliah</th>';
    echo '<th>Mata Kuliah</th>';
    echo '<th>Nilai</th>';
    echo '<th>Grade</th>';
    echo '<th>Predikat</th>';
    echo '<th>Status</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'. $mahasiswa_baru->nim .'</td>';
    echo '<td>'. $mahasiswa_baru->nama .'</td>';
    echo '<td>'. $mahasiswa_baru->kuliah .'</td>';
    echo '<td>'. $mahasiswa_baru->mata_kuliah .'</td>';
    echo '<td>'. $mahasiswa_baru->nilai .'</td>';
    echo '<td>'. $mahasiswa_baru->grade .'</td>';
    echo '<td>'. $mahasiswa_baru->predikat .'</td>';
    echo '<td>'. $mahasiswa_baru->status .'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
}
?>
</body>
</html>
