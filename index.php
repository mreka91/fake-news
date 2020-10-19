<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fake News For You</title>
</head>

<body>
</body>
<h1>Get your daily news fix from us!</h1>
<div>
    <?php foreach ($articles as $article) : ?>
        <h2>
            <?= $article['title']; ?>
        </h2>
        <img src="<?= $article['image']; ?>" alt="">
        <p>
            <?= $article['content']; ?>
        </p>
        <p>Author:
            <?= $article['author']; ?>
        </p>
        <p>Published at:
            <?= $article['published_date']; ?>
        </p>
        <p>Likes:
            <?= $article['likes']; ?>
            &#10084;
        </p>

    <?php endforeach ?>

</div>

</html>