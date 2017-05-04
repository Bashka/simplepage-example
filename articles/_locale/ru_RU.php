<?php
return [
  '' => [
    'plural_forms' => function($n){
      if($n % 10 == 1 && $n % 100 != 11){
        return 0;
      }
      elseif($n % 10 >= 2 && $n % 10 <= 4 && ($n % 100 < 10 || $n % 100 >= 20)){
        return 1;
      }
      else{
        return 2;
      }
    },
  ],
  '%d article' => [
    '%d статья',
    '%d статьи',
    '%d статей',
  ],
  'Articles' => 'Статьи',
  'create' => 'создать',
  'prev' => 'назад',
  'next' => 'вперед',
];
