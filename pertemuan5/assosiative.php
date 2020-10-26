<?php

$mahasiswa = [
    [ 
    "gambar" => "nahrul.jpg",
    "nama" => "Nahrul Khayattullah",
    "npm" => "180202113",
    "jurusan" => "Teknik Informatika",
    "email" => "khayattullah73@gmail.com"
] ,
[ 
    "gambar" => "ading.jpg",
    "nama" => "Sayid Abdul qadir jaelani",
    "npm" => "180202107",
    "jurusan" => "Teknik Informatika",
    "email" => "AdingWoe@gmail.com"
] ,
[ 
    "gambar" => "hisbul.jpg",
    "nama" => "Hisbul Wathoni",
    "npm" => "180202101",
    "jurusan" => "Teknik Informatika",
    "email" => "TwentyTen@gmail.com"
] ,
[ 
    "gambar" => "jaka.jpg",
    "nama" => "jaka Sakti Wara",
    "npm" => "180202108",
    "jurusan" => "Teknik Informatika",
    "email" => "JakaImout@gmail.com"
] ,
[ 
    "gambar" => "korti.jpg",
    "nama" => "M. Tomy Syahrial Putra",
    "npm" => "180202112",
    "jurusan" => "Teknik Informatika",
    "email" => "TommyPutra@gmail.com"
] ,
[ 
    "gambar" => "guruh.jpg",
    "nama" => "Muhammad Guruh Arafah",
    "npm" => "180202103",
    "jurusan" => "Teknik Informatika",
    "email" => "ArgusArafah@gmail.com"
] ,     

]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assosiative Array</title>
</head>

<style>

li img {
    width: 150px;
    height: 150px;
}

ul li img {
    transition: 1s ease;
}

ul:hover li img {
        transform : rotate(360deg);
        border-radius: 50%;
    }

ul {
    float: left;
    
}

</style>
<body>

<h1>Daftar nama mahasiswa</h1>

<?php

foreach ($mahasiswa as $mhs) :

?>

    <ul>
    <li><img src="img/<?php echo $mhs["gambar"] ?>"> </li>
    <li>Nama: <?php echo $mhs["nama"]?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]?></li>
    <li>NIM: <?php echo $mhs["npm"]?></li>
    <li>E-mail: <?php echo $mhs["email"]?></li>
    
    
    </ul>

<?php endforeach?>
    
</body>
</html>