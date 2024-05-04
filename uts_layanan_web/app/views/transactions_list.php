<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transactions List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Transactions</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($transactions as $transaction) {
                ?>
                <tr>
                    <td><?php echo $transaction['transaksi_id']; ?></td>
                    <td><?php echo htmlspecialchars($transaction['produk_id']); ?></td>
                    <td><?php echo $transaction['jumlah']; ?></td>
                    <td>$<?php echo number_format($transaction['total_harga'], 2); ?></td>
                    <td><?php echo $transaction['tanggal']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <a href="?action=listProducts">Kembali ke Produk</a>
</body>
</html>
