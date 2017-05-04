<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
  http_response_code(404);
  exit;
}

$sp = [
  'pdo' => [
    'queries' => [
      [
        'INSERT INTO article (title, content) VALUES (:title, :content)',
        'params' => [
          'title' => $_POST['title'],
          'content' => $_POST['content'],
        ],
      ],
    ],
  ],
];

include('../sp.php');
header('Location: /articles/view?id=' . pdo_build($sp['pdo'])->lastInsertId(), 302);
