<?php
if($_SERVER['REQUEST_METHOD'] != 'POST'){
  http_response_code(404);
  exit;
}

$sp = [
  'input' => [
    INPUT_POST => [
      'id' => [
        FILTER_SANITIZE_NUMBER_INT,
        [
          'filter' => FILTER_VALIDATE_INT,
          'options' => ['min_range' => 1],
          'comment' => 'Идентификатор должен быть положительным, целым числом'
        ]
      ],
    ],
  ],
  'pdo' => [
    'queries' => [
      [
        'UPDATE article SET title=:title, content=:content WHERE id=:id',
        'params' => [
          'id' => &$_POST['id'],
          'title' => &$_POST['title'],
          'content' => &$_POST['content'],
        ],
      ]
    ],
  ],
];

include('../sp.php');
header('Location: /articles/view?id=' . $_POST['id'], 302);
