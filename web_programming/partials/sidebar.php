        <aside class="main-sidebar">
          <div class="main-sidebar__item">
            <div class="item-label right">about author</div>
            <figure class="main-sidebar__figure">
              <img src="<?= $article_list[3]['image'] ?>"  alt="" />
            </figure>
            <h3 class="main-sidebar__title"><?= $article_list[3]['title'] ?></h3>
            <p class="main-section__description">
           <?= substr($article_list[3]['content'], 0, 150) . ' ...' ?>
            </p>
          </div>
          <div class="main-sidebar__item">
            <div class="item-label right">recent</div>
            <ul class="recent-list">

              <?php foreach( array_slice($article_list, 0, 3) as $article): ?>
              <li class="recent-list__item">
                <figure  class="recent-list__img">
                  <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>" title="<?= $article['title'] ?>" />
                </figure>
                <a href="/article.php?article=<?= $article['id'] ?>" class="recent-list__description">
                  Deciding on a menu for dinner
                </a>
              </li>
              <?php endforeach ?>
            </ul>
          </div>
        </aside>