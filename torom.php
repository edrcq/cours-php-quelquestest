<?php 

function convertToRom($n) {
    // Variable de retour / resultat
    $romn = '';
    // Tableau associatif $convertr['M'] = 1000;
    $convertr = [
        'M' => 1000, 'CM' => 900,
        'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90,
        'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9,
        'V' => 5, 'IV' => 4,
        'I' => 1
    ];

    // tant que $n > 0
    while($n > 0) {
        echo '$n = ' . $n . "\n";
        
        foreach($convertr as $leChiffreRomain => $valeurDuChiffre) {
            // M = 1000
            // 190 > 100
            if ($n >= $valeurDuChiffre) {
                // 190 - 100 = 90
                $n -= $valeurDuChiffre;
                // romn = '' . 'C'
                $romn .= $leChiffreRomain;
                break;
            }
        }

        // $chiffres_romains = array_keys($convertr);
        // for($i = 0; $i < count($chiffres_romains); $i++) {
        //     $leChiffreRomain = $chiffres_romains[$i];
        //     $valeurDuChiffre = $convertr[$leChiffreRomain];
        //     if ($n >= $valeurDuChiffre) {
        //         $n -= $valeurDuChiffre;
        //         $romn = $romn . $leChiffreRomain;
        //         break;
        //     }
        // }
        
     
    }
    return $romn;
}

var_dump(convertToRom(190));

?>