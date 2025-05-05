<?php

class Importer {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function run(): void {
        $this->pdo->beginTransaction();
        try {
            $posts = $this->fetchJson('https://jsonplaceholder.typicode.com/posts');
            $comments = $this->fetchJson('https://jsonplaceholder.typicode.com/comments');

            $this->pdo->exec("DELETE FROM comments");
            $this->pdo->exec("DELETE FROM posts");

            $postStmt = $this->pdo->prepare("INSERT INTO posts (id, user_id, title, body) VALUES (?, ?, ?, ?)");
            foreach ($posts as $post) {
                $postStmt->execute([$post['id'], $post['userId'], $post['title'], $post['body']]);
            }

            $commentStmt = $this->pdo->prepare("INSERT INTO comments (id, post_id, name, email, body) VALUES (?, ?, ?, ?, ?)");
            foreach ($comments as $comment) {
                $commentStmt->execute([$comment['id'], $comment['postId'], $comment['name'], $comment['email'], $comment['body']]);
            }

            $this->pdo->commit();

            echo "Загружено " . count($posts) . " записей и " . count($comments) . " комментариев\n";
        } catch (Throwable $e) {
            $this->pdo->rollBack();
            throw $e;
        }
    }

    private function fetchJson(string $url): array {
        $json = file_get_contents($url);
        if ($json === false) {
            throw new Exception("Не удалось загрузить данные с $url");
        }
        return json_decode($json, true);
    }
}
