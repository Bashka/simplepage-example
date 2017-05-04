<?php
return [
  'plugins' => [
    '_plugins/autoload.php',
    '_plugins/input.php',
    '_plugins/middleware.php',
    '_plugins/i18n.php',
    '_plugins/error.php',
    '_plugins/pdo.php',
    '_plugins/acl.php',
    '_plugins/layout.php',
    '_plugins/hook.php',
  ],
  'layout' => [
    'title' => 'SimplePage',
    'layout' => '_layout/default.html',
  ],
  'pdo' => [
    'dsn' => [
      'mysql',
      'dbname' => 'sp',
      'charset' => 'UTF8',
    ],
    'username' => 'root',
    'password' => 'root',
    'options' => [
      PDO::ATTR_PERSISTENT => true
    ],
  ],
];
