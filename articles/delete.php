<?php
if($_SERVER['REQUEST_METHOD'] != 'GET'){
  http_response_code(404);
  exit;
}

$sp = [
  'input' => [
    INPUT_GET => [
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
        'DELETE FROM article WHERE id = :id',
        'params' => [
          'id' => &$_GET['id'],
        ],
      ]
    ],
  ],
];

include('../sp.php');
header('Location: /articles', 302);
