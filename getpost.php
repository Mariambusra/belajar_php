<?php
// $_GET & $_POST adalah variable super global
// Variable ini membawa banyak data yang terjadi di aplikasi

    // $_GET passing data melalui url (bisa langsung lewat vscode dan di urlnya)
    // $_GET["nama"] = "Mariam Busra";
    // $_GET["alamat"] = "Bandung";
    // var_dump($_GET);

    $arr = [
        [
            "nama" => "Mariam Busra",
            "kota" => "Bandung",
            "no_telp" => 8757655688,
        ],
        [
            "nama" => "Dewi Nur Fadilah",
            "kota" => "Bandung",
            "no_telp" => 8757655688,
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul>
            <?php foreach($arr as $person): ?>
                <li>
                    <a href="./get.php?nama=<?= $person['nama']?>&kota=<?= 
                    $person['kota']?>&no_telp=<?= $person['no_telp']?>"><?= 
                    $person['nama']; ?> </a>
                </li>
            <?php endforeach ?>
        </ul>
    
        <hr/>

        <form method="POST">
            <input type= "text"
            name= "txt_username"
            placeholder= "username"/>

            <input type= "password"
            name= "txt_password"
            placeholder= "password"/>

            <button type="submit">Submit </button>
        </form>

        <?php if(isset($_POST['txt_username'])): ?>
        <h3>Hallo, <?php echo $_POST['txt_username'] ?></h3>
        <?php endif; ?>
</body>
</html> 