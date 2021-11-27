<?php

require 'includes/database.php';


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

<?php require 'includes/header.php'; ?>



    <!-- put your code below this line -->
    <?php if (empty($articles)): ?>
      <p>No articles found.</p>
    <?php else: ?>
      <ol>
      <?php foreach($articles as $article) : ?>

              <li>
                <article>
                  <h2><a href="article.php?id=<?= $article['id'];?>"><?= $article['title']; ?></a></h2>
                  <p><?= $article['content']; ?></p>
                </article>
              </li>

      <?php endforeach ?>
      </ol>
    <?php endif; ?>

<?php require 'includes/footer.php'; ?>
