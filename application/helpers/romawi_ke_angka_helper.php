<?php
function romawi_ke_angka($romawi) {
    $romawi_numerals = array(
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1
    );

    $angka = 0;
    $prev_value = 0;

    for ($i = strlen($romawi) - 1; $i >= 0; $i--) {
        $current_value = $romawi_numerals[$romawi[$i]];

        if ($current_value < $prev_value) {
            $angka -= $current_value;
        } else {
            $angka += $current_value;
        }

        $prev_value = $current_value;
    }

    return $angka;
}
