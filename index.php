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
    <!-- favicon-->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><text x=%2250%%22 y=%2250%%22 dominant-baseline=%22central%22 text-anchor=%22middle%22 font-size=%2280%22>📄</text></svg>" />
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- own css-->
    <link rel=" stylesheet" href="style.css">

    <title>Dunder Mifflin !Fake News Site</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dunder Mifflin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <span class="navbar-text ">
                The best paper company in the world
            </span>
        </div>
    </nav>
    <!-- HEADER-->
    <header class="hero-image">
        <div class="hero-text">
            <h1>The Office Gossip!</h1>
            <span>The latest news about what's happening at Dunder Mifflin</span>
        </div>
    </header>


    <!-- POSTS-->
    <main class="container">
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
                            <?= $article['content']; ?>
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

    <!-- FOOTER-->

    <footer>
        <p>For more definitely not fake news, find us on social media:</p>
        <div class="social">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-linkedin"></a>
        </div>
        <p>&copy; 2013 Dunder Mifflin<p>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>