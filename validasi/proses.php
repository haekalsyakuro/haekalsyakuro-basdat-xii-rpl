<?php 

require 'helper/fungsi_validasi.php';

$rules = [
    'nama' => ['required'],
    'email' => ['required'],
    'username' => ['required'],
    'usia' => ['required']
];

validasi($rules);


?>