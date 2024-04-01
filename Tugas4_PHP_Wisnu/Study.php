<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pendidikan</title>
</head>
<style>
    h1{
    font-family: 'Courier New', Courier, monospace;
    font-size: 20pt;
    text-align: center;
}
tr:hover{
    background-color: rgb(252, 250, 247);
    color: blueviolet;
    font-size: 10pt;
    font-weight: bold;
    font-family: 'Courier New', Courier, monospace;
    padding: 10px;
    }
table{
    background-image: url(data:image/jpeg;base64,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);
    background-size: cover;
}
</style>
<body>
    <h1 align="center">RIWAYAT PENDIDIKAN</h1>
    <table border="1" align="center" weight="50%" height="80%" cellpadding="10" cellspacing="5" width="40%">
        <thead>
            <tr  bgcolor="khaki">
                <th>Pendidikan</th>
                <th>Tahun Ajaran</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>SD Negeri 1 Ciwangi</td>
                <td>2006-2014</td>
            </tr>
            <tr>
                <td>SMP Negeri 1 Limbangan</td>
                <td>2014-2017</td>
            </tr>
            <tr>
                <td>SMk Negeri 6 Garut</td>
                <td>2017-2020</td>
            </tr>
            <tr>
                <td>Universitas Amikom Purwokerto</td>
                <td>2021-Lulus</td>
            </tr>
            <tfoot>
                <tr bgcolor="khaki">
                    <th colspan="3">Semoga Cepat Kaya AAMIIN</th>
    
                </tr>
            </tfoot>
        </tbody>

    </table>
</body>
</html>