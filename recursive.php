<?php
function tampilkanAngka(int $jumlah,int $indeks=1){
    echo"Perulangan ke- $indeks<br/>";

    //panggil fungsi itu sendiri (rekursif)
    if($indeks < $jumlah){
        tampilkanAngka($jumlah, $indeks+1);
}
}
tampilkanAngka(20);
?>