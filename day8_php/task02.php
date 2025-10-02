<?php
    function dog_bark(int $woof_nb) {
        $strWoof = "";
        for ($i = 1; $i <= $woof_nb; $i++) {
            $strWoof .= ' woof';
        }
        echo trim($strWoof) . PHP_EOL;
    }
?>