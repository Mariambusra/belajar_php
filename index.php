<?php 
// ini single komentar
# Ini komentar single juga

/**
 * Ini komentar Line 1
 * Ini komentar Line 2
 */

    // Standard Output

 // gunakan \n untuk enter di terminal
 // gunakan <br/> untuk di browser
 // Menggabungkan 2 string, gunakan . (dot)

// Ini untuk menampilkan kalimat atau string
    echo "Mariam Busra Al-abrar" . " (menggunakan echo)\n";

    echo "<br/>";

    //cara kedua untuk menampilkan kalimat atau string
    print "Mariam Busra Al-abrar" . " (menggunakan print)\n";

    // print_r adalah fungsi build-in dari php
    // cara ketiga bisa digunakan untuk menampilkan data string, array, dsb
    print_r ("Mariam Busra Al-abrar (menggunakan print_r)\n");

    // var_dump adalah fungsi build-in dari php
    // cara ketiga khusus untuk analisa data / untuk programmer
    var_dump("Mariam Busra Al-abrar (menggunakan var_dump)");

    $string_satu = "Mariam Busra Al-abrar";
    $string_dua = "(Menggunakan variable terpisah)";

    echo $string_satu . ' ' .  $string_dua;

    echo 12 + 8 . "\n"; // Integer

    echo "12" + 8 . "\n"; // String
    // secara default string di convert ke int oleh php
    // bukan cara yang direkomendasi

    $x = 5;
    $y = 3;

    $hasilxy = $x * $y;

    echo "Hasil kali " . $x . " x " . $y . " = "  .  $hasilxy . "\n";

    echo 25 + 5;
    echo "\n";
    echo 25 - 5;
    echo "\n";
    echo 25 * 5;
    echo "\n";
    echo 25 / 5;
    echo "\n";
    echo 25 % 2; // Modulus untuk mencari nilai akhir apakah ada sisa atau tidak
    echo "\n";

    // Biasanya untuk menggabungkan tag HTML pada logic
    $a = "<div>";
    $a .= "<h3>Mariam Busra </h3>";
    $a .= "<p>Gunakan . untuk menggabungkan)</p>";
    $a .= "<p>Sambungan lagi</p>";
    $a .= "</div>";

    echo $a;

    // Boolean true / false || 1 / 0

    var_dump(1 == "1");  // true - karena hanya membandingkan value
    var_dump(1 === "1");  // false - karena membandingkan juga tipe datanya

    /** 
     * Operator Logika 
     * && (and)
     * || (Or)
     * ! (not)
     * > (more than)
     * < (less than)
     * == (equal)
     * >= (more than or equal)
     * <= (less than or equal)
     * != (not equal)
*/ 

    $umur = 17;
    var_dump($umur < 20 && $umur >= 16);  // true

    $nama = "MB";
    var_dump($nama == "MB"); // true

    $nama = "Mariam Busra Al-abrar";
    $umur = "21";
    $birthday = "25-12-2002";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coba php</title>
    </head>
    <body>
        <ul>
            <li>Nama : <?php echo $nama; ?></li>
            <li>Umur : <?php $umur; ?></li>  <!-- Echo bisa pake cara kaya gini juga -->
            <li>Tanggal lahir : <?php echo $birthday; ?></li>
            <li>5 x 5 adalah <?php echo 5 * 5; ?></li>
        </ul>
    </body>
    </html>