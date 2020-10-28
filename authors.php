<!-- HEADER-->
<?php require __DIR__ . '/header.php'; ?>

<!-- AUTHORS CARDS-->

<div class="authorContainer">
    <h1>The authors</h1>
    <div class="cards">
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[0]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[0]['author']; ?></h2>
                    <p class="card_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore dolorem tenetur distinctio dolores vero amet eos debitis labore error veniam. Tempora exercitationem quibusdam ex dolore unde sunt voluptatum incidunt quas.</p>

                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[2]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[2]['author']; ?></h2>
                    <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis iste libero explicabo possimus minima itaque ipsa nisi adipisci tempore cupiditate beatae laboriosam, rerum impedit eveniet temporibus perspiciatis illum assumenda sequi.</p>

                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[4]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[4]['author']; ?></h2>
                    <p class="card_text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem commodi nemo praesentium debitis officia sunt ea totam cupiditate accusamus nisi, perferendis beatae sequi nulla eveniet iure, enim laudantium aperiam quisquam!</p>

                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[6]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[6]['author']; ?></h2>
                    <p class="card_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque culpa repudiandae, quis vitae dicta architecto nobis corrupti sit cum fuga odit quasi nesciunt hic fugiat rem consectetur error. Reiciendis, fugit?</p>

                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[9]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[8]['author']; ?></h2>
                    <p class="card_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ratione at deserunt in possimus, fugit, non velit, sunt ullam neque eius dolorum voluptatibus molestiae eligendi sapiente nulla pariatur veniam recusandae?</p>

                </div>
            </div>
        </div>

    </div>
</div>



<!-- FOOTER-->
<?php require __DIR__ . '/footer.php'; ?>