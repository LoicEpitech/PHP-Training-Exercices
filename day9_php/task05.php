<?php
    function form_is_submitted(): bool {
        return ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit']));
    }

    function whoami(): string {
        $name = $_POST['name'] ?? null;
        $age  = $_POST['age'] ?? null;
        $curriculum = $_POST['curriculum'] ?? null;
        $message = "";

        if (!$name && !$age) {
            $message = "Hi, I have no name.";
        } elseif (!$name && $age && is_numeric($age)) {
            $message = "Hi, I have no name and I'm $age years old.";
        } elseif ($name && (!$age || !is_numeric($age))) {
            $message = "Hi, my name is $name.";
        } elseif ($name && $age && is_numeric($age)) {
            $message = "Hi, my name is $name and I'm $age years old.";
        }

        if ($curriculum) {
            $message .= " I'm a student of " . $curriculum . ".";
        }

        return $message;
    }
?>