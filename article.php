<!-- HEADER-->
<?php require __DIR__ . '/header.php'; ?>

<!-- ARTICLE-->
<main class="container">
    <marquee>Breaking news! Read about what happened at Schrute's Beet Farm.</marquee>
    <?php usort($articles, 'date_compare'); ?>
    <?php
    $id = $_GET['id'];
    $article = getArticleById($articles, $id);

    ?>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">

                <h2 class="post-title">
                    <?= $article['title']; ?>
                </h2>

                <img src="<?= $article['image']; ?>" alt="">

                <p class="post-text">
                    <?= $article['content']; ?>
                </p>

                <p class="post-meta">Posted by
                    <a href="authors.php"><?= $article['author']; ?></a>
                    <?= $article['published_date']; ?></p>

                <p class="post-meta">Likes:
                    <?= $article['likes']; ?>
                    &#10084;&#65039;
                </p>

            </div>
        </div>
    </div>
</main>
<!-- FOOTER-->
<?php require __DIR__ . '/footer.php'; ?>