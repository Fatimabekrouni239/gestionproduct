<?php
if ($_SERVER["Afficher"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["password"];

    if ($username == "123" && $password == "dca123") {
        
        echo "Login successful! Welcome, $username.";
    } else {
        
        echo "Invalid username or password. Please try again.";
    }
}
?>