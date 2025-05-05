<?php
$pdo = require __DIR__ . '/../config/db.php';

$query = $_GET['query'] ?? '';
$results = [];

if (strlen($query) >= 3) {
    $stmt = $pdo->prepare("
        SELECT posts.title, comments.body
        FROM comments
        JOIN posts ON comments.post_id = posts.id
        WHERE comments.body LIKE :search
    ");
    $stmt->execute(['search' => '%' . $query . '%']);
    $results = $stmt->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск по комментариям</title>
</head>
<body>
    <h1>Поиск записей по тексту комментария</h1>
    <form method="get">
        <input type="text" name="query" value="<?= htmlspecialchars($query) ?>" placeholder="Введите от 3 символов" required minlength="3">
        <button type="submit">Найти</button>
    </form>

    <?php if ($query && strlen($query) < 3): ?>
        <p>Минимум 3 символа для поиска.</p>
    <?php elseif ($results): ?>
        <h2>Результаты:</h2>
        <ul>
            <?php foreach ($results as $row): ?>
                <li>
                    <strong><?= htmlspecialchars($row['title']) ?></strong><br>
                    <?= htmlspecialchars($row['body']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php elseif ($query): ?>
        <p>Ничего не найдено.</p>
    <?php endif; ?>
</body>
</html>
