<?php 

function is_consonne($c) {
    if (strchr("aeiouy", $c)) {
        return true;
    }
    return false;
}

function check_nums($mot, $MAX_NUMS = 6) {
    if (strlen($mot) >= $MAX_NUMS) {
        $is_valid = false;
        $end_mot = substr($mot, -$MAX_NUMS);
        for($i = 0; $i < $MAX_NUMS; $i++) {
            if (ord($end_mot[$i]) < 48 || ord($end_mot[$i]) > 57) {
                return true;
            }
        }
        return false;
    }
    return true;
}

function check_lettres_bis($mot, $MAX_SAME = 4) {
    $mot = strtolower($mot);
    $same = count_chars($mot, 1);
    foreach($same as $key => $value) {
        if ($value >= 4 && $key >= 97 && $key <= 122) {
            return false;
        }
    }
    return true;
}

function check_lettres($mot, $MAX_SAME = 4) {
    $mot = strtolower($mot);
    $same = count_chars($mot, 1);
    $motlen = strlen($mot);
    for($i = 97; $i <= 122; $i++) {
        if (isset($same[$i]) && $same[$i] >= $MAX_SAME) {
            return false;
        }
    }
    return true;
}

function check_pseudos($pseudos) {
    $arr = [];
    foreach($pseudos as $pseudo) {
        $arr[] = check_lettres($pseudo, 4) && check_nums($pseudo, 6);
    }
    return $arr;
}

$tests_accounts = [
    'hero01', 'test0041', 'epicwin202202', 'w', '0', 'zzzzzz999'
];

// $fake_results = [1, 1, 0, 1, 1, 0];

$results = check_pseudos($tests_accounts);
var_dump($results);

// $pseudo = "You Are Grouup55w66655";
// $is_valid = check_lettres($pseudo, 4) && check_nums($pseudo, 6);
// $test_is_valid = "oups" || true;
// var_dump($is_valid);
// var_dump($test_is_valid); // false



 

?>