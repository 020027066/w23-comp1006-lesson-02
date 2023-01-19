<?php

$my_arr_constructor = array();

$my_arr_literal = [];

$my_arr_init_vals = ['a', 'b', 'c'];

$mixed_arr = [
    'Mic',
    true,
    44,
    80.62
  ];

  // Adding to an array (destructive; need to make copy of original if you want ot save it)

  array_push($mixed_arr, "I like cats");
  $mixed_arr[] = "I like dogs";

  array_unshift($mixed_arr, false);

  array_pop($mixed_arr);

  array_shift($mixed_arr);

  array_splice($mixed_arr, 3, 1);

  $mixed_arr[] = [
    "hello",
    "world"
  ];

  $mixed_arr[3] = 'I like hedgehogs';
  
?>