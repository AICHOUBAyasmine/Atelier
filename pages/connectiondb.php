<?php 
try {
    $pdo = new PDO("mysql:host=localhost; dbname=chat",'root',"");
} catch ( Exception $e) {
     die ('Erreur de connextion : ' . $e->getMessage());
}