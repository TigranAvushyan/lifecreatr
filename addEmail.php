<?php
require 'config/db_connection.php';
try {
    $query = $pdo->prepare('INSERT INTO emails(email) VALUE (:email)');
    $query->execute(['email'=>$_POST['email']]);
} catch (Exception $e) {
    echo $e;
}
