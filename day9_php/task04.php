<?php
    function whoami(): void {
        $name = $_POST['name'] ?? null;
        $age  = $_POST['age'] ?? null;

        if (!$name && !$age) {
            echo "Hi, I have no name.";
            return;
        }

        if (!$name && $age && is_numeric($age)) {
            echo "Hi, I have no name and I'm $age years old.";
            return;
        }

        if ($name && (!$age || !is_numeric($age))) {
            echo "Hi, my name is $name.";
            return;
        }

        if ($name && $age && is_numeric($age)) {
            echo "Hi, my name is $name and I'm $age years old.";
            return;
        }
    }
?>