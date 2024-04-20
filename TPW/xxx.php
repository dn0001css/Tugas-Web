<?php

require "xxnx.php";
// $b["alamat"] = "jalan";

// $b["jumlah_hobi"] = count ($b["hobi"]);

// var_dump($b);

// echo count($b);

// kondisi -- code
// if ($b["umur"] >= 25){
//     echo $b["pekerjaan"] . PHP_EOL;
// } elseif ($b["umur"] <= 7){
//     echo $b["hobi"][0] . PHP_EOL;
//     echo $b["hobi"][1] . PHP_EOL;
//     echo $b["hobi"][2] . PHP_EOL;
// } else {
//     echo $b["pendidikan"];
// } 


// switch
// switch ($b["nilai"]) {
//     case 'A':
//         echo "sangad baik";
//         break;
//     case 'B':
//         echo "baik";
//         break;
//     case 'C':
//         echo "cukup";
//         break;
//     case 'D':
//         echo "dengang";
//         break;

//     default:
//         echo "tidak lulus";
//         break;
// }

// perulangan for loop
// for ($i=0; $i < count($b["hobi"]) ; $i++) { 
//     echo $b["hobi"][$i] . PHP_EOL;
// }


// tugas perulangan for loop
// $a = [
//     "katak", "kodok", "laptop", "lele", "ikan", "sate", "tidur", "pulang"
// ];

// for ($i=0; $i < count($a) ; $i++) { 
//    echo $a[$i] . PHP_EOL;
// }


// while loop
// $i = 0;
// while ($i <= 10) {
//     echo "iyaa" . PHP_EOL;
//     $i++;
// }


foreach ($b as $key => $value) {
    if ($key == "hobi") {
        echo "Hobi:" . PHP_EOL;
        $a = 1;
        foreach ($value as $hobi) {
            echo $a . ". " . $hobi . PHP_EOL;
            $a++;
        }
    } else {
        echo $key . ':' . $value . PHP_EOL;
    }
}