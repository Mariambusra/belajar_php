<?php
    $arr = [
        ["Senin", "Selasa", "Rabu"],
        ["Januari", "Februari","Maret"],
        ["2020", "2021", "2022"],
    ];

    // foreach($arr as $data){
    //     var_dump($data);
    // }

    $dataPerson = [
        [
            "nama"=> "Mariam Busra Al-abrar",
            "kota"=> "Bandung",
            "baju"=> "Biru",
            "makanan_favorite"=> [
            "Ayam","Soto", "Sambal" ]
        ],
        [
            "nama"=> "Radianti",
            "kota"=> "Bandung",
            "baju"=> "Biru muda",
            "makanan_favorite"=> [
            "Roti","Rendang"]
        ],
        [
            "nama"=> "Najwa",
            "kota"=> "Bandung",
            "baju"=> "Biru tua",
            "makanan_favorite"=> [
            "Pizza","Burger", "Sosis"]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <ul style="margin-bottom: 24px;"> 
        <?php foreach($arr as $data): ?>
            <li>Index 0: <?= $data[0] ?></li>
            <li>Index 1:  <?= $data[1] ?></li>
            <li>Index 2:  <?= $data[2] ?></li>
    </ul> 
    <?php endforeach; ?> -->

    <?php //echo $dataPerson[0]['nama']; ?>

    <?php foreach($dataPerson as $data): ?>
    <ul style="margin-bottom:24px;">
            <li>Nama: <?php echo $data['nama']; ?></li>
            <li>Kota: <?php echo $data['kota']; ?></li>
            <li>Baju: <?php echo $data['baju']; ?></li>
            <li> 
                Makanan favorite:
                <ol>
                    <?php foreach($data['makanan_favorite'] as $makanan): ?>
                        <li><?php echo $makanan; ?></li>
                        <?php endforeach; ?>
                </ol>
            </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>