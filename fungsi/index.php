<?php

// cara membuat function
function ngoding(){

}

// function bisa di kategorikan menggunakan public,protected,privat
class vscode{
    public function coding_php(){

    }
}


// mencoba buat fungsi sapa teman
function sapa_temen(){
    echo "<h1>hai gais<h1>";
    echo "<h3>ketemu lagi bersama guehhh<h3>";
}

// mencoba membuat fungsi yang ada parameter
function temen(){
    $temen_1 = "younggleexx anjingg";
    echo "<h2>heyyy disini adaa adee guwehhh adek gue gak mirip younglexx $temen_1 <h2>";
}

// cara panggil fungsi
// tuliskan nama fungsinya bersamaan
sapa_temen();

// jika fungsi menngunakan parameter,harus ditulis saat pemannggilannya
temen("younglex,",20);

// mencoba membuat fungsi menggunakan percobaan 
function kasir($nama,$jumlah){
    echo"<h3>hai ($nama), terimakasih telah berkunjung!! <h3>";
    echo"<h3>hai dan jangan lupa kembali lagi <h3>";

    // membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)

    if($jumlah>10){
        echo "<h3> gokill,kamu dapat mobil karna telat berkunjung 
        sebanyak ($jumlah) kali <h3>";

    }

    // panggil function dan isi parameternya
    kasir("younglex",9);

}



?>