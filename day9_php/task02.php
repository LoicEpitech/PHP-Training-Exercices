<?php
    function render_body( $pageName){
        $file = $pageName . ".html";
        if (file_exists($file)) {
            return file_get_contents($file);
        }
        return "<p>Unknown page</p>";
    }
?>