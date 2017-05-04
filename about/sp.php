<?php
$sp = isset($sp)? $sp : [];
$sp = array_replace_recursive([
  'layout' => [
    'title' => 'О проекте',
  ],
], $sp);
include('../sp.php');
