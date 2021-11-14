<?php

$hour = 18;

?>

<!DOCTYPE html>
<html>
<head>
  <title>My website</title>
  <meta charset="utf-8">
</head>
<body>

<h1>Lorem Ipsum</h1>
<p>Hello. </p>

<?php if ($hour < 12) : ?>
  <p>Good morning</p>
<?php elseif ($hour < 18) : ?>
  <p>Good afternoon</p>
<?php elseif($hour < 22) : ?>
  <p>Good evening</p>
<?php else : ?>
  <p>Goodnight</p>
<?php endif; ?>




</body>
</html>
