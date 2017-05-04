<?php
$start = isset($_GET['start'])? (int) $_GET['start'] : 0;
$offset = isset($_GET['offset'])? (int) $_GET['offset'] : 2;

$sp = [
  'layout' => [
    'title' => 'Articles',
  ],
  'pdo' => [
    'queries' => [
      'articles' => [
        'SELECT * FROM article LIMIT :start, :offset',
        'params' => [
          'start' => $start,
          'offset' => $offset,
        ],
      ],
      'articlesCount' => [
        'SELECT COUNT(*) FROM article',
      ],
    ],
  ],
];
include('../sp.php');
$articlesCount = $articlesCount->fetchColumn();
?>
<h1>Статьи</h1>
<p>
  <ul>
      <?php foreach($articles as $article): ?>
          <li>
              <a href="/articles/view?id=<?= $article->id ?>">
                  <?= $article->title ?>
              </a>
          </li>
      <?php endforeach; ?>
  </ul>
  <ul>
      <li>
          Всего <?= i18n_plural($articlesCount, '%d article') ?>
      </li>
      <li>
        <a href="/articles/create"><?= i18n('create') ?></a>
      </li>
      <li>
        <a href="/articles?start=<?= $start - $offset ?>"><?= i18n('prev') ?></a>
      </li>
      <li>
        <a href="/articles?start=<?= $start + $offset?>"><?= i18n('next') ?></a>
      </li>
  </ul>
</p>
