<?php require('./utils/helper.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap&subset=cyrillic,cyrillic-ext"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
  <?php require('./partials/header.php') ?>
    <main class="main">
      <div class="main-wrapper">
        <section class="news-section">
          <?php foreach($article_list as $article): ?>
          <div class="main-section__item">
            <figure class="main-section__figure">
              <a href="/article.php?article=<?= $article['id'] ?>" class="main-section__detail"></a>
              <img class="main-section__img" src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" title="<?= $article['title'] ?>" />
            </figure>
            <figcaption>
              <a href="/article.php?article=<?= $article['id'] ?>" class="main-section__title">
                <?= $article['title'] ?>
              </a>
              <div class="main-section__writer">
                <span class="author"><?= $article['author'] ?></span>
                <span class="date"><?= $article['date'] ?></span>
                <span class="comments"><?= $article['coments'] ?> comments</span>
              </div>
              <p class="main-section__description">
                <?= substr($article['content'], 0, 285) . ' ...' ?>
              </p>
            </figcaption>
          </div>
          <?php endforeach; ?>
        </section>
      </div>
    </main>
    <?php require('./partials/footer.php') ?>
  </body>
</html>
