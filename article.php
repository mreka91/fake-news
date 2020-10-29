<!-- HEADER-->
<?php require __DIR__ . '/header.php'; ?>

<!-- ARTICLE-->
<main class="container">
    <marquee>Breaking news! Read about what happened at Schrute's Beet Farm.</marquee>

    <?php
    $id = $_GET['id'];
    $article = getArticleById($articles, $id);
    $image = $article['image'];
    $image_alt = $article['image_alt'];
    $title = $article['title'];
    $content = $article['content'];
    $date = $article['published_date'];
    $likes = $article['likes'];
    $author = $article['author'];
    ?>

    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">

                <h2 class="post-title">
                    <?= $title; ?>
                </h2>

                <img src="<?= $image; ?>" alt="<?= $image_alt; ?>">

                <p class="post-text">
                    <?= $content; ?>
                </p>

                <p class="post-meta">Posted by
                    <a href="authors.php"><?= $author; ?></a>
                    <?= $date; ?></p>

                <p class="post-meta">Likes:
                    <?= $likes; ?>
                    &#10084;&#65039;
                </p>

            </div><!-- post-preview end-->
        </div><!-- col end-->
    </div><!-- row end-->
</main>

<!-- FOOTER-->
<?php require __DIR__ . '/footer.php'; ?>