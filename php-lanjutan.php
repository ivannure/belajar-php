<?php
// $nama = "Ivan";

// echo $nama;
// echo $nama;
// echo $nama;
// echo $nama;
// echo $nama;

// Perulangan

// $no = 15;

// for ($i = 0; $i < $no; $i++) {
//     $n = $i + 1;
//     echo "$n. $nama <br>";
// }

// $i = 0;
// $no = 7;

// while ($i < $no) {
    // $n = $i + 1;
    // echo "$n. $nama <br>";
    // $i++;
// }

// do {
//     $n = $i + 1;
//     echo "$n. $nama <br>";
//     $i++;
// } while ($i < $no);


// $data = array('Avanza', 'Xenia', 'Mitsubishi', 'Lamborghini', 'Panther');

// foreach ($data as $namaMobil) {
//     echo "$namaMobil <br>";
// }

// percabangan
// if ($nama == "ivan"){
//     echo $nama."iya itu saya";
// }else{
//     echo $nama. "itu bukan saya";
// }

// switch($nama) {
//     case "Ivan":
//         $pesan = $nama. " itu saya";
//     break;
//     case "Roni":
//         $pesan = $nama. " bukan saya";
//     break;
//     default:
//         $pesan = $nama. " sapa saya";
// }

// echo $pesan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                    case "Ivan":
                        $pesan = $_POST['nama']." itu saya";
                    break;
                    case "Roni":
                        $pesan = $_POST['nama']." bukan saya";
                    break;
                    default:
                        $pesan = $_POST['nama']." ini siapa saya";
                }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    
    ?>
</body>
</html>