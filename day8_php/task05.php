<?php
    function calc_average(array $tableauNumber) {
        $total = 0;
        foreach ($tableauNumber as $unNombre){
            $total += $unNombre;
            $moyenne = $total / count($tableauNumber);
        } 
        return round($moyenne,1);
    }

?>