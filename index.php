<!-- HEADER-->
<?php require __DIR__ . '/header.php'; ?>

<!-- ARTICLES-->
<main class="container">
    <marquee>Breaking news! Read about what happened at Schrute's Beet Farm.</marquee>

    <?php usort($articles, 'date_compare'); ?>
    <?php foreach ($articles as $article) : ?>
        <?php
        $title = $article['title'];
        $content = $article['content'];
        $date = $article['published_date'];
        $likes = $article['likes'];
        $author = $article['author'];
        $id = $article['id'];

        ?>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="/article.php?id=<?= $id; ?>">
                        <h2 class="post-title">
                            <?= $title; ?>
                        </h2>
                    </a>
                    <p class="post-text">
                        <?= shortenText($content); ?>
                    </p>
                    <p class="post-meta">Posted by
                        <a href="authors.php"><?= $author; ?></a>
                        <?= $date; ?></p>
                    <p class="post-meta">Likes:
                        <?= $likes; ?>
                        &#10084;&#65039;
                    </p>
                </div>
                <hr>
            </div>

        </div>
    <?php endforeach ?>

</main>

<!-- FOOTER-->
<?php require __DIR__ . '/footer.php'; ?>