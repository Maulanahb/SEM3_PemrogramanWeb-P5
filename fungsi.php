<?php
    function perkenalan($nama ,$salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan Anda <br/>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Maulana", "Hallo");
    
    echo "<hr>";

    $saya = "Maulana";
    $ucapanSalam = "Selamat pagi";
    perkenalan($saya);
    echo "<hr>";
    
    //fungsi hitung umur
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah ".hitungUmur(2006, 2025)." tahun<br/>";

?>
