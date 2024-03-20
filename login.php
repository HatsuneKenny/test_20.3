<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];

    // Načtení uživatelů ze souboru
    $file = file("users.txt", FILE_IGNORE_NEW_LINES);
    foreach ($file as $line) {
        list($username, $password) = explode("|", $line);
        if ($username === $login_username && $password === $login_password) {
            // Přihlášení úspěšné
            session_start();
            $_SESSION['username'] = $username; // Uložení jména uživatele do session
            header("Location: index.html"); // Přesměrování na hlavní stránku
            exit();
        }
    }
    // Přihlášení neúspěšné
    echo "Neplatné uživatelské jméno nebo heslo!";
}
?>
