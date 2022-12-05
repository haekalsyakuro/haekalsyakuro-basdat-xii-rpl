<?php
// pewarisan atau inheritance

// class induk
class komputer{
    public $merk;
    public $prosesor;
    public $memory;

    public function beli_komputer(){
        return "beli komputer baru";
    }
}

// class turunan/extends dari kelas komputer ke class
class laptop extends komputer{
    public function lihat_spek(){
        // ambili property dari class komputer
        return "merk: $this->merk,prosesor:
        $this->prosesor,memory:$this->memory";
    }
}
// instansiasi
// membuat objek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

// isi porpertynya
$laptop_baru->merk = "asus";
$laptop_baru->prosesor = "AMD RYZEN 9X";
$laptop_baru->memory = "1 petabyte";

// panggil functionnya

$laptop_baru->beli_komputer();
echo "<br/>";
$laptop_baru->lihat_spek();





?>