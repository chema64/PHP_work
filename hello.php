<?php

$count = 3;
$price = 9.99;

$values = [
  "message" => "Hello world!",
  "count" => 150,
  "pi" => 3.14,
  "status" => false,
  "result" => null,
  $count,
  $price
];

var_dump($values);

$alice = [
  "name" => "Alice",
  "email" => "alice@example.com",
  "height" => 1.80
];

$bob = [
  "name" => "Bob",
  "email" => "bob@example.com",
  "height" => 1.67
];

$carol = [
  "name" => "Carol",
  "email" => "carol@example.com",
  "height" => 1.74
];

$people = [$alice, $bob, $carol];

var_dump($people);

$alice_email = $people[0]["email"];

var_dump($alice_email);

$articles = [
  ["title" => "First post", "content" => "This is the first post"],
  ["title" => "Another post", "content" => "Another post to reaqd here"],
  ["title" => "Read this!", "content" => "You must read this article!"]
];



var_dump($articles[1]["title"]);

$small_articles = ["First post", "Another post", "Read this!"];

foreach ($small_articles as $test) {
    echo $test, ", test ";
}
