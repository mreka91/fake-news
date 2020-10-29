<!-- HEADER-->
<?php require __DIR__ . '/header.php'; ?>

<!-- AUTHORS CARDS-->

<div class="author-container">
    <h1>The authors</h1>

    <div class="cards">
        <?php foreach ($authors as $author) : ?>
            <?php
            $profil = $author['profil'];
            $profil_alt = $author['profil_alt'];
            $name = $author['name'];
            $description = $author['description'];
            $email = $author['email'];
            ?>
            <div class="cards-item">
                <div class="card">

                    <div class="card-image">
                        <img src="<?= $profil; ?>" alt="<?= $profil_alt;  ?>">
                    </div>

                    <div class="card-content">

                        <h2 class="card-title">
                            <?= $name; ?>
                        </h2>

                        <p class="card-text">
                            <?= $description ?>
                        </P>

                        <p class="card-text">Write with hot tips to
                            <a href="mailto:<?= $email; ?> ">
                                <span><?= $email; ?></span>
                            </a>
                        </p>
                    </div><!-- card-content end-->
                </div><!-- card end-->
            </div><!-- card-item end-->
        <?php endforeach; ?>
    </div>
</div>

<!-- FOOTER-->
<?php require __DIR__ . '/footer.php'; ?>