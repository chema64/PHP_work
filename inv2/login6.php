<?php

require 'includes/auth.php';

session_start();

?>

<?php require 'includes/header.php'; ?>

<?php var_dump($_SESSION); ?>

<?php if (isLoggedIn()): ?>

  <p>You are logged in. <a href="logout.php">Log out</a></p>
  <p><a href="inv.php">inv</a></p>

<?php else: ?>

  <p>You are not logged in. <a href="login.php">Log in</a></p>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
