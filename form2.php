<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
  var_dump($_POST);
}



?>

<!DOCTYPE html>
<html>
<head>
  <title>My website</title>
  <meta charset="utf-8">
</head>
<body>

<form method="post" novalidate>
  postcode: <input name="postcode" name="postcode" required pattern="[0-9]{4}" title="please enter in valid regular expression">
  email <input type="email" name="email" required>
  url <input type="url" name="url" required>
  number <input type="number" name="number" min="1" max="10" required>

  <button>send</button>
</form>

</html>
