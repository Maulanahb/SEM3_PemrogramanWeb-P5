<?php
//membuat fungsi
function perkenalan ($nama ,$salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama. "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
//memanggil fungsi perkenalan
perkenalan("Maulana" ,"Hallo");

echo "<hr/>";

$saya ="Maulana";
$ucapanSalam ="Selamat pagi";

//memanggil fungsi perkenalan dengan argumen variabel
perkenalan($saya);
?>