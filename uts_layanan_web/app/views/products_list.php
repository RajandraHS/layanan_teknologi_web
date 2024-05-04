<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Produk</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) {
                ?>
                <tr>
                    <td><?php echo $product['produk_id']; ?></td>
                    <td><?php echo htmlspecialchars($product['nama']); ?></td>
                    <td><?php echo htmlspecialchars($product['deskripsi']); ?></td>
                    <td>$<?php echo number_format($product['harga'], 2); ?></td>
                    <td><?php echo $product['stok']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <ul>
        <li><a href="?action=listCategories">Lihat Kategori</a></li>
        <li><a href="?action=listSuppliers">Lihat Supplier</a></li>
        <li><a href="?action=listTransactions">Lihat Transaksi</a></li>
    </ul>
</body>
</html>
