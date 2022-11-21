<?php 

// variabel lokal hanya bisa di akses dari scape dimana dia di definisikan 
$nama ="guanteng bingintz";

function halodunia(){
    $nama ="pak saiful";// variabel lokal
    echo $nama;
    
}

halodunia();//objek
echo $nama;

?>