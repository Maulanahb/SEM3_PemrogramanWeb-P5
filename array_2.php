<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Array Asosiatif</title>
    <style>
        table {
            border-collapse: collapse;
            width: 40%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];
?>

<h2 style="text-align:center;">Data Dosen</h2>
<table>
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?= $Dosen['nama'] ?></td>
    </tr>
    <tr>
        <td>Domisili</td>
        <td><?= $Dosen['domisili'] ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?= $Dosen['jenis_kelamin'] ?></td>
    </tr>
</table>
</body>
</html>
