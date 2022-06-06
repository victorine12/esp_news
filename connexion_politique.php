<?php
// DATABASE SETTINGS
define("DB_HOST", "localhost");
define("DB_NAME", "mglsi_news");
define("DB_CHARSET", "utf8");
define("DB_USER", "mglsi_user");
define("DB_PASSWORD", "passer");
 
// CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

// GET ARTICLE
$stmt = $pdo->prepare("SELECT * FROM `article` where categorie = 4");
$stmt->execute();
$article = $stmt->fetchAll();
?>