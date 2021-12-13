<?php

require 'Item.php';

$my_item = new Item('Huge', 'A big item');

echo $my_item->getName();

var_dump($my_item);
