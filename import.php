<?php

require_once __DIR__ . '/src/Importer.php';

$pdo = require __DIR__ . '/config/db.php';
$importer = new Importer($pdo);

try {
    $importer->run();
} catch (Throwable $e) {
    echo "Ошибка: " . $e->getMessage() . PHP_EOL;
}
