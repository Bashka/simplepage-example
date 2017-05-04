<?php
$sp = [
  'layout' => [
    'title' => 'Редактор статьи',
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
<form action="/articles/edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $article->id ?>"/>
    <div>
      <input type="text" name="title" placeholder="Заголовок" value="<?= $article->title ?>"/>
    </div>
    <div>
      <textarea name="content"><?= $article->content ?></textarea>
    </div>
    <div>
        <input type="submit" value="Сохранить"/>
    </div>
</form>
