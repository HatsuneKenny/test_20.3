<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Uložení uživatelských údajů do souboru
    $file = fopen("users.txt", "a");
    fwrite($file, "$username|$password\n");
    fclose($file);

    // Přesměrování na přihlašovací stránku
    header("Location: mainpage.html");
    exit();
}
?>
