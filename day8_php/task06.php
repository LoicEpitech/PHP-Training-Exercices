<?php
function sequence(int $nbr) {
    if ($nbr < 0) {
        return; 
    }

    $term = "1"; 
    echo $term . "\n";

    for ($i = 1; $i < $nbr +1; $i++) {
        $term = nextLookAndSay($term);
        echo $term . "\n";
    }
}

function nextLookAndSay(string $number): string {
    $result = "";
    $count = 1;

    for ($i = 0; $i < strlen($number); $i++) {
        if ($i + 1 < strlen($number) && $number[$i] == $number[$i + 1]) {
            $count++;
        } else {
            $result .= $count . $number[$i];
            $count = 1;
        }
    }

    return $result;
}

?>
