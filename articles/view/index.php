<?php
$sp = [
  'layout' => [
    'title' => 'Статья',
  ],
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
      'article' => [
        'SELECT * FROM article WHERE id = :id',
        'params' => [
          'id' => &$_GET['id'],
        ],
      ],
    ],
  ],
];
include('../../sp.php');
$article = $article->fetch();
?>
<h1>
    <?= $article->title ?>
</h1>
<div>
    <?= $article->content ?>
</div>
<ul>
    <li>
        <a href="/articles/edit?id=<?= $article->id ?>">edit</a>
    </li>
    <li>
        <a href="/articles/delete.php?id=<?= $article->id ?>">delete</a>
    </li>
</ul>
