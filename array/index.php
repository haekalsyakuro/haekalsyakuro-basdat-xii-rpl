<?php

$warnaterang=['kuning','hijau','pink'];
$warnagelap=['hitam','abu-abu','cokelat'];

// gabungkan 2 array tersebut menjadi 1

$warna_warna =array_merge($warnaterang,$warnagelap);

// array merge bisa ditambahkan lebih dari 2
$semua_warna=array_merge(
    $warnaterang,
    $warnagelap,
    ['magenta','cyan','hijau kelabu']
);

// unpacking  untuk mengekstrak array 
$list_buah_lokal =['mangga','rambutan'];
$list_buah =['kurma','anggur',...$list_buah_lokal,
'kismis'];

// kurma,anggur,mangga,rambutan,kismis

// explode array berfungsi memecah belah string lalu di ubah kedalam array 

// explode ada 2 parameter : delimeter (pemisah), string sasaran(sasaran yang akan kita pecah menjadi array

$siswa = "andi budi dono kasino ahok";
// var_dump(explode(" ",$siswa));

//imload fungsi kebalikanya explode
// inpload dia 2 parameter: glue(penggabungan),array sasaran (sasaran yang akan kita gabungh menjadu string)

$siswa_pintar =['refa','agus','novan'];

echo implode(' ',$siswa_pintar);



?>