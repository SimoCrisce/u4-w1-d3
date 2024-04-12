<?php

include __DIR__ . "/includes/database.php";

$stmt = $pdo->prepare("DELETE from utente WHERE id = ?");
$stmt->execute([$_GET["id"]]);

header("Location: /u3-w1-php/u4-w1-d3/");