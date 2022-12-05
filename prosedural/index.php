<?php 

// prosedural adalah program yang tidak perlu adanya instansiasi cukup menggunakan fungsi

// contoh prosedural
echo date('d-m-y');//fungsi tanpa objek

// contoh dari pendekatan objek
$date =new DateTime();//objek  

echo $date->format('d-m-y');


?>