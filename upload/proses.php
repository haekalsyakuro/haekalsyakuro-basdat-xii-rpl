<?php

$files = $_FILES;
$folder_upload = "./assets/uploads";

// Periksa apakah folder sudah ada
if (!is_dir($folder_upload)){
    // jika tidak ada maka folder harus dibuat terlebih dahulu
    mkdir($folder_upload, 0777, $rekursif = true);
}

// simpan masing masing file ke dalam variabel
// simpan file ke dalam array dan ubah menjadi objek
$fileFoto = (object) @$_FILES['foto'];
$filektp = (object) @$_FILES['ktp'];

// Mulai Upload File
$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folder_upload}/{$fileFoto->name}"
);


$uploadktpSukses = move_uploaded_file(
    $filektp->tmp_name, "{$folder_upload}/{$filektp->name}"
);

// menampilkan file yang terupload 
 if ($uploadFotoSukses){
     $link = "{$folder_upload}/{$fileFoto->name}";
     echo "sukses upload foto :<a href ='{$link}'>
     {$fileFoto -> name} </a>";
     echo "<br>";
 }

 if ($uploadktpSukses){
    $link = "{$folder_upload}/{$filektp->name}";
    echo "sukses upload ktp :<a href ='{$link}'>
    {$filektp -> name} </a>";
    echo "<br>";
 }

//  batas ukuran file yang di upload
if ($fileFoto->size > 1000 * 2000){
    die("file tidak boleh lebih dari 2MB");
}
if ($filektp->type !== 'image/jpg'){
    die("file tidak boleh lebih dari 2MB");
}




// echo "<pre>";
// print_r($files);
// echo "</pre>";