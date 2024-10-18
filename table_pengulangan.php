<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel pengulangan</title>
</head>
<body>
    <table border= "1">
        <?php for($baris = 1; $baris <=3; $baris++): ?>
        <tr>
            <?php for($kolom = 1; $kolom <= 5; $kolom++): ?>
            <td><?= $baris; ?>.<?= $kolom; ?></td>
            <?php endfor; ?>
        </tr>
            <?php endfor; ?>

            <!-- Bikin tabel yang urut bisa pake cara otomatis kaya yg diatas pake php, dan bisa juga pake cara manual kaya dibawah-->
        <tr>
            <td>2.1</td>
            <td>2.2</td>
            <td>2.3</td>
            <td>2.4</td>
            <td>2.5</td>
        </tr>
        <tr>
            <td>3.1</td>   
            <td>3.2</td>
            <td>3.3</td>
            <td>3.4</td>
            <td>3.5</td>
        </tr>
    </table>
</body>
</html>