<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
// This is the file where you can keep your HTML markup. We should always try to
// keep as much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Add bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- own css-->
    <link rel=" stylesheet" href="style.css">

    <title>Dunder Mifflin !Fake News Site</title>
</head>

<body>
    <!-- Try grid -->
    <header>
        <h1>The Office Gossip!</h1>
        <span>Brought to you by the best from Dunder Mifflin</span>

    </header>


    <main class="main">
        <article>

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

        </article>
    </main>


    <footer>
        <p>For more definitely not fake news, find us on social media:</p>
        <div class="social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
        </div>

    </footer>

</body>

</html>