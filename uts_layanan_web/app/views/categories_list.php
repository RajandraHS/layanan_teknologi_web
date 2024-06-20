<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categories</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Categories</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID Kategori</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($categories as $category) {
                ?>
                <tr>
                    <td><?php echo $category['kategori_id']; ?></td>
                    <td><?php echo htmlspecialchars($category['nama'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($category['deskripsi'], ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <a href="?action=listProducts">Kembali ke Produk</a>
</body>
</html>
