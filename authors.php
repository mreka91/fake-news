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
                    <p class="card_text">Dwight is trained in the art of surveillance, and is a former Lackawanna County volunteer sheriff's deputy. He has a black belt in Goju-Ryu karate, and is the senpai at his dojo.Dwight is a pop culture and sci-fi enthusiast.</p>
                    <p class="card-text">Contact him with hot tips at <span>dwight@theoffice.us</span></p>
                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[2]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[2]['author']; ?></h2>
                    <p class="card_text"> Jim is a fan of the Philadelphia Phillies, Philadelphia Eagles, and the Philadelphia 76ers. Jim is also a fan of hip-hop, specifically Eminem. His favourite food is soft-shell crab. Jim began working at Dunder Mifflin in 1998 an rose to the role of co-manager.</p>
                    <p class="card-text">Contact him with hot tips at <span>jim@theoffice.us</p></span>
                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[4]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[4]['author']; ?></h2>
                    <p class="card_text">Pam started out as athe receptionist at Dunder Mifflin, before becoming a saleswoman and eventually office administrator. From her years working the front desk, Pam has become well-acquainted with the Dunder-Mifflin staff and has a thorough understanding of what is happening at the office.</p>
                    <p class="card-text">Contact her with hot tips at <span>pam@theoffice.us</p></span>
                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[6]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[6]['author']; ?></h2>
                    <p class="card_text">Michael Gary Scott was born on March 15, 1964 in Scranton, Pennsylvania. He started at Dunder Mifflin as a salesman in the 1990s. He he became a salesman because he loved to make friends. After being promoted to regional manager at a young age, he continued to treat work-related relationships as personal friendships.</p>
                    <p class="card-text">Contact him with hot tips at <span>michael@theoffice.us</p></span>
                </div>
            </div>
        </div>
        <div class="cards_item">
            <div class="card">
                <div class="card_image"><img src="<?= $articles[9]['image']; ?>"></div>
                <div class="card_content">
                    <h2 class="card_title"><?= $articles[8]['author']; ?></h2>
                    <p class="card_text">Angela Martin was born on November 11, 1974 in Dayton, Ohio. She has one sister named Rachael who is her best friend. Angela is the senior accountant, head of the Party Planning Committee, and safety officer at the Scranton branch of Dunder Mifflin.</p>
                    <p class="card-text">Contact her with hot tips at <span>angela@theoffice.us</span></p>
                </div>
            </div>
        </div>

    </div>
</div>



<!-- FOOTER-->
<?php require __DIR__ . '/footer.php'; ?>