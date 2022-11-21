<?php 
// statis adalah mempertahankan nilai aslinya

function test(){
     static $a= 0; //mendefinisikan variabel lokal
    //  variabel lokal jika sudah mewati scapenya akan kembali ke nilai awal
    // static mempertahankan nilai diluar scope
    echo "A {$a}<br>";
    $a++; //menggunakan fungsi increment
}

test();
test();
test();

?>