<?php 
$host="localhost";
$kullanici="root";
$parola="";
$vt="uyelik";

//sıralama önemli
$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti, "UTF8");



/*if($baglanti){
    echo "Bağlantı başarılı";
}
*/
