<?php


function arrayChanger($array) {
    $newArray = [];
    for($i = 0; $i < count($array); $i++) {
        if(strlen($array[$i]) == 5){
            $newArray[] = $array[$i];
        }
    }
    return $newArray;
}


$cats = ["Mazen", "Leximen", "Osama", "Ahmed", "Sigma", "Hassan", "Ali", "Moe", "Ziad", "Hossam", "Khaled", "Abdo", "Sami", "Omar", "Yasser", "Hossam"];
print_r(arrayChanger($cats));
?>