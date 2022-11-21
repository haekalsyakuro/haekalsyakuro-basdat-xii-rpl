<?php 

function validasi(array $listinput){
    // variable berisi inputan form 
    $request = $_REQUEST;

    // perulangan untuk array terluar (berisinama input)
    foreach ($listinput as $input => $listinput){
        echo "periksa input <strong>{$input}</strong><br>";

        // perulangan untuk sub array (berisi rules)
        foreach ($listinput as $rules){
            echo "rules <strong>{$rules}</strong><br>";
            // pemeriksaan tiap rulse 
            if($rules === 'required'){
                $lolos = lolosrequired($request[$input]);
                // penerapan nilai bool
                echo $lolos ? "lolos" : "tidak";
            }
            echo "<br>";
        }
        echo "<br>";
    }
}

function lolosrequired($nilai){
    return(bool)$nilai;
}

?>