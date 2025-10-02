<?php
    function get_shortest($tab) {
        if(empty($tab)){return null;}
        $bestMatchNb = 0;
        $bestMatch = "";
        foreach($tab as $element) {
            if($bestMatchNb == 0 || strlen($element) < $bestMatchNb) {
                $bestMatchNb = strlen($element);
                $bestMatch = $element;
            }
        }
        return $bestMatch;
    }
?>