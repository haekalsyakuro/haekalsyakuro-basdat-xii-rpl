<?php
// class smk jp1

class smkjp1{
    // properti
    var $guru;
    var $murid;

    // function berdiri
    function berdiri(){
        return"berdiri dengan tegap";

    }
    function berlari(){
        return"berlari 50000km langkah";
    } 
    
}
// intansiasi
$sekolah = new smkjp1();

$smkjpone = new smkjp1();


// isi properti
$sekolah->guru="pak saipul";
$sekolah->murid="ahmad kunnn";

// tampilkan

echo $sekolah->guru," ",$sekolah->berdiri();
echo "<br />";
echo $sekolah->murid," ",$sekolah->berlari();
echo "<br />";

// tampilkan dari objek $smk jpone
echo $smkjpone->guru," ",$smkjpone->berdiri();
echo "<br />";
echo $smkjpone->murid," ",$smkjpone->berlari();

?>