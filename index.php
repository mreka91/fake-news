<?php require __DIR__ . '/header.php'; ?>

<!-- POSTS-->
<main class="container">
    <marquee>Breaking news! Read about what happened at Schrute's Beet Farm.</marquee>
    <?php usort($articles, 'date_compare'); ?>
    <?php foreach ($articles as $article) : ?>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="">
                        <h2 class="post-title">
                            <?= $article['title']; ?>
                        </h2>
                    </a>
                    <img src="<?= $article['image']; ?>" alt="">
                    <p class="post-text">
                        <?= shortenText($article['content']); ?>
                    </p>
                    <p class="post-meta">Posted by
                        <a href="#"><?= $article['author']; ?></a>
                        <?= $article['published_date']; ?></p>
                    <p class="post-meta">Likes:
                        <?= $article['likes']; ?>
                        &#10084;&#65039;
                    </p>
                </div>
                <hr>
            </div>

        </div>
    <?php endforeach ?>
</main>

<?php require __DIR__ . '/footer.php'; ?>