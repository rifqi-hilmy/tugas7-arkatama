<?php
function angka_ke_romawi($number) {
    $romawi = '';
    $romawi_numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($romawi_numerals as $key => $value) {
        while ($number >= $value) {
            $romawi .= $key;
            $number -= $value;
        }
    }

    return $romawi;
}
