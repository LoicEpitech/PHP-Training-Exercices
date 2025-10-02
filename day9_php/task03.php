<?php
    function dynamic_body(){
        $page = null;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        $file = $page . ".html";
        if (file_exists($file)) {
            return file_get_contents($file);
        }
        return "<p>Unknown page</p>";
    }
?>