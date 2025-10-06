<?php
try {
    $pdo = new PDO('mysql:host=mariadb;port=3306;dbname=app', 'appuser', 'apppassword');
    echo "SUCCESS: Database connection successful!\n";
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
?>