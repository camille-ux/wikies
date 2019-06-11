<?php

$pdo = new PDO ("mysql:host=localhost;dbname=wikies", "camille", "password");

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();