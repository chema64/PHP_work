<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "Y3O/byd9[tTDL2k0";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

echo "connected successfully";

$sql = "SELECT *
        FROM article
        ORDER BY published_at;";

$results = mysqli_query($conn, $sql);

if($results === false) {
  echo mysqli_error($conn);
} else {
   $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>

    <!-- put your code below this line -->
    <?php if (empty($articles)): ?>
      <p>No articles found.</p>
    <?php else: ?>
      <ol>
      <?php foreach($articles as $article) : ?>

              <li>
                <article>
                  <h2><?= $article['title']; ?></h2>
                  <p><?= $article['content']; ?></p>
                </article>
              </li>

      <?php endforeach ?>
      </ol>
    <?php endif; ?>
    </body>
</html>
