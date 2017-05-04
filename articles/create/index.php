<?php
$sp = [
  'layout' => [
    'title' => 'Редактор статьи',
  ],
];

include('../../sp.php');
?>
<form action="/articles/create.php" method="POST">
    <div>
      <input type="text" name="title" placeholder="Заголовок"/>
    </div>
    <div>
      <textarea name="content"></textarea>
    </div>
    <div>
        <input type="submit" value="Сохранить"/>
    </div>
</form>
