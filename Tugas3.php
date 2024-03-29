<?php
$a1 = ['nim' => '1111', 'nama mahasiswa'=>'Wisnu', 'nilai'=>95];
$a2 = ['nim' => '1234', 'nama mahasiswa'=>'munandar', 'nilai'=>80];
$a3 = ['nim' => '1435', 'nama mahasiswa'=>'ahmaad', 'nilai'=>78];
$a4 = ['nim' => '1436', 'nama mahasiswa'=>'yusuf', 'nilai'=>76];
$a5 = ['nim' => '1666', 'nama mahasiswa'=>'nadia', 'nilai'=>86];
$a6 = ['nim' => '1789', 'nama mahasiswa'=>'caca', 'nilai'=>50];
$a7 = ['nim' => '1879', 'nama mahasiswa'=>'afika', 'nilai'=>20];
$a8 = ['nim' => '1468', 'nama mahasiswa'=>'koko', 'nilai'=>30];
$a9 = ['nim' => '8787', 'nama mahasiswa'=>'wira', 'nilai'=>70];
$a10 = ['nim' => '8787', 'nama mahasiswa'=>'andin', 'nilai'=>65];
$ar_nilai = [$a1, $a2, $a3, $a4,$a5,$a6,$a7,$a8,$a9,$a10 ];


$ar_judul = ['No', 'Nama Mahasiswa',  'Nim', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


$nilai_tertinggi = max(array_column($ar_nilai, "nilai"));
$nilai_terendah = min(array_column($ar_nilai, "nilai"));
$nilai_rata_rata = array_sum(array_column($ar_nilai, "nilai")) / count($ar_nilai);
$jumlah_mahasiswa = count($ar_nilai);
$jumlah_keseluruhan_nilai = array_sum(array_column($ar_nilai, "nilai"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Nilai Mahasiswa</title>
</head>
<style>
        table {
            margin: 0 auto; 
            width: 80%;
        }
        td {
            text-align: center;
        }
        thead,tfoot{
            background: gray;
        }

</style>
<body>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="80%">
        <thead>
            <tr>
            <?php
                foreach($ar_judul as $judul) {
                    echo "<th>$judul</th>";
                }
            ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($ar_nilai as $mhs) {
                $keterangan = ($mhs["nilai"] >= 65) ? "Lulus" : "Gagal";
                $grade = "";
                if ($mhs["nilai"] >= 85) {
                    $grade = "A";
                } elseif ($mhs["nilai"] >= 75) {
                    $grade = "B";
                } elseif ($mhs["nilai"] >= 65) {
                    $grade = "C";
                } elseif ($mhs["nilai"] >= 50) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }
                $predikat = "";
                switch ($grade) {
                    case "A":
                        $predikat = "Memuaskan";
                        break;
                    case "B":
                        $predikat = "Bagus";
                        break;
                    case "C":
                        $predikat = "Cukup";
                        break;
                    case "D":
                        $predikat = "Kurang";
                        break;
                    case "E":
                        $predikat = "Buruk";
                        break;
                }
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['nama mahasiswa'] ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Nilai Tertinggi</th>
                <th colspan="5"><?= $nilai_tertinggi ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Terendah</th>
                <th colspan="5"><?= $nilai_terendah ?></th>
            </tr>
            <tr>
                <th colspan="3">Nilai Rata-rata</th>
                <th colspan="5"><?= $nilai_rata_rata ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Mahasiswa</th>
                <th colspan="5"><?= $jumlah_mahasiswa ?></th>
            </tr>
            <tr>
                <th colspan="3">Jumlah Keseluruhan Nilai</th>
                <th colspan="5"><?= $jumlah_keseluruhan_nilai ?></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>