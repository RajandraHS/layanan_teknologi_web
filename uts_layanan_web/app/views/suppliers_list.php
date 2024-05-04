<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Supplier</title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<body>
    <h1>Daftar Supplier</h1>
    <a href="?action=listProducts">Kembali ke Produk</a> 
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($suppliers as $supplier) {
                echo "<tr>";
                echo "<td>{$supplier['supplier_id']}</td>";
                echo "<td>{$supplier['nama']}</td>";
                echo "<td>{$supplier['alamat']}</td>";
                echo "<td>{$supplier['nomor_telepon']}</td>";
                echo "<td>{$supplier['email']}</td>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
