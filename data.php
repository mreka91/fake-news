<?php

declare(strict_types=1);

// This is the file where you can keep your data arrays such as articles and
// authors.
$authors = [
    [
        'id' => '1',
        'name' => 'Dwight Schrute'
    ],

    [
        'id' => '2',
        'name' => 'Jim Halpert'
    ],

    [
        'id' => '3',
        'name' => 'Pam Beesly'
    ],

    [
        'id' => '4',
        'name' => 'Michael Scott'
    ],

    [
        'id' => '5',
        'name' => 'Angela Martin'
    ]
];

$articles = [
    [
        'id' => '1',
        'author_id' => '1',
        'author' => $authors[0]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>Through concentration, I can raise and lower my cholesterol at will. I train my major blood vessels to retract into my body on command. Also, I can retract my penis up into itself.</p><p>When I die. I want to be frozen. And if they have to freeze me in pieces, so be it. I will wake up stronger than ever, because I will have used that time, to figure out exactly why I died. And what moves I could have used to defend myself better now that I know what hold he had me in. I am fast. To give you a reference point, I am somewhere between a snake and a mongoose... And a panther.</p>Do I feel bad about betraying Jim? Not at all. That's the game. Convince him we're in an alliance, get some information, throw him to the wolves. That's politics baby! Get what you can out of someone, then crush them. I think Jim might have learned a very valuable lesson. Jim is my enemy. But it turns out that Jim is also his own worst enemy. And the enemy of my enemy is my friend. So Jim, is actually my friend. But, because he is his own worst enemy, the enemy of my friend is my enemy so actually Jim is my enemy.</p>",
        'published_date' => '2020-10-11',
        'likes' => '100',
        'image' => 'https://www.denofgeek.com/wp-content/uploads/2020/04/the_office_dwight.jpg.png?resize=768%2C432',
        'image_alt' => 'Dwight looking in the window through the blinds'
    ],

    [
        'id' => '2',
        'author_id' => '1',
        'author' => $authors[0]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>Jim is my enemy. But it turns out that Jim is also his own worst enemy. And the enemy of my enemy is my friend. So Jim, is actually my friend. But, because he is his own worst enemy, the enemy of my friend is my enemy so actually Jim is my enemy. Powerpoints are the peacocks of the business world; all show, no meat.</p>
        <p>I was the youngest pilot in Pan Am history. When I was four, the pilot let me ride in the cockpit and fly the plane with him. And I was four, and I was great and I would have landed it, but my dad wanted us to go back to our seats. I come from a long line of fighters, my maternal grandfather was the toughest guy I ever knew. World War II veteran. He killed twenty men and then spent the rest of the war in an Allied prison camp... My father battled blood pressure and obesity all his life... different kind of fight.</p><p>
        Do I feel bad about betraying Jim? Not at all. That's the game. Convince him we're in an alliance, get some information, throw him to the wolves. That's politics baby! Get what you can out of someone, then crush them. I think Jim might have learned a very valuable lesson.</p>",
        'published_date' => '2020-10-18',
        'likes' => '205',
        'image' => 'https://cdn.shopify.com/s/files/1/0250/1217/4900/products/0-11oz_mug-schrutefarms-ro_620x.jpg?v=1572164333',
        'image_alt' => 'Beet farm logo'

    ],

    [
        'id' => '3',
        'author_id' => '2',
        'author' => $authors[1]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>He has not stopped working... for a second. At 12:45, he sneezed, while keeping his eyes open, which I always thought was impossible. At 1:32 he peed. And I know that because he did that in an open soda bottle, under the desk, while filling out expense reports. And on the flip side, I've been so busy watching him that I haven't even started work. It's exhausting, being this vigilant. I'll probably have to go home early today.</p><p>I don't have a ton of contact with the Scranton branch, but before I left I took a box of Dwight's stationary. So, from time to time I send Dwight faxes. From himself. From the future.</p>",
        'published_date' => '2020-10-7',
        'likes' => '70',
        'image' => 'https://d2j1wkp1bavyfs.cloudfront.net/wp-content/uploads/2018/07/01032321/4236043.jpg?q=50',
        'image_alt' => 'Jim sitting in an office,holding up a sign'
    ],

    [
        'id' => '4',
        'author_id' => '2',
        'author' => $authors[1]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>He has not stopped working... for a second. At 12:45, he sneezed, while keeping his eyes open, which I always thought was impossible. At 1:32 he peed. And I know that because he did that in an open soda bottle, under the desk, while filling out expense reports. And on the flip side, I've been so busy watching him that I haven't even started work. It's exhausting, being this vigilant. I'll probably have to go home early today.</p><p>I don't have a ton of contact with the Scranton branch, but before I left I took a box of Dwight's stationary. So, from time to time I send Dwight faxes. From himself. From the future.</p>",
        'published_date' => '2020-10-16',
        'likes' => '50',
        'image' => 'https://i.pinimg.com/originals/c9/32/83/c932837c36cb0cc2d60d290c72235f50.png',
        'image_alt' => 'Jim looking bored'
    ],

    [
        'id' => '5',
        'author_id' => '3',
        'author' => $authors[2]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>I can tell Michael's mood by which comedy routine he chooses to do. The more infantile, the more upset he is. And he just skipped the Ace Ventura talking butt thing. He never skips it. This is bad.</p><p>I feel God in this Chili’s tonight I don’t care what they say about me. I just want to eat. Which I realize is a lot to ask for. At a dinner party. I’m guessing Angela is the one in the neighborhood that gives the trick-or-treaters toothbrushes. Pennies. Walnuts. How is it possible that in five years, I’ve had two engagements and only one chair?</p><p>I have decided that I'm going to be more honest. I'm gonna start telling people what I want, directly. So, look out world, 'cuz 'ol Pamy is gettin' what she wants. And, don't call me Pamy.</p><p>When a child gets behind the wheel of a car and runs into a tree, you don't blame the child; he didn't know any better. You blame the 30-year-old woman who got in the passenger seat and said, 'Drive, kid; I trust you.'</p>",
        'published_date' => '2020-10-16',
        'likes' => '20',
        'image' => 'https://thebrag.com/wp-content/uploads/2020/02/PAMHEAD.jpg',
        'image_alt' => 'Pam saluting'
    ],

    [
        'id' => '6',
        'title' => "The people person's paper people",
        'author_id' => '3',
        'author' => $authors[2]['name'],
        'content' => "<p>I can tell Michael's mood by which comedy routine he chooses to do. The more infantile, the more upset he is. And he just skipped the Ace Ventura talking butt thing. He never skips it. This is bad.</p><p>I feel God in this Chili’s tonight I don’t care what they say about me. I just want to eat. Which I realize is a lot to ask for. At a dinner party. I’m guessing Angela is the one in the neighborhood that gives the trick-or-treaters toothbrushes. Pennies. Walnuts. How is it possible that in five years, I’ve had two engagements and only one chair?</p><p>I have decided that I'm going to be more honest. I'm gonna start telling people what I want, directly. So, look out world, 'cuz 'ol Pamy is gettin' what she wants. And, don't call me Pamy.</p><p>When a child gets behind the wheel of a car and runs into a tree, you don't blame the child; he didn't know any better. You blame the 30-year-old woman who got in the passenger seat and said, 'Drive, kid; I trust you.'</p>",
        'published_date' => '2020-10-15',
        'likes' => '150',
        'image' => 'https://www.lifeandstylemag.com/wp-content/uploads/2019/02/Jenna-Fischer-Best-Quotes-The-Office-Promo.jpg',
        'image_alt' => 'Pam holding the phone'
    ],

    [
        'id' => '7',
        'author_id' => '4',
        'author' => $authors[3]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>Wikipedia is the best thing ever. Anyone in the world can write anything they want about any subject so you know you are getting the best possible information.</p><p>I feel God in this Chili’s tonight I don’t care what they say about me. I just want to eat. Which I realize is a lot to ask for. At a dinner party. I’m guessing Angela is the one in the neighborhood that gives the trick-or-treaters toothbrushes. Pennies. Walnuts. How is it possible that in five years, I’ve had two engagements and only one chair?</p><p>Do I need to be liked? Absolutely not. I like to be liked. I enjoy being liked. I have to be liked. But it’s not like this compulsive need like my need to be praised.</p><p>I learned a while back that if I do not text 911, people do not return my calls. Um, but people always return my calls because they think that something horrible has happened.</p>",
        'published_date' => '2020-10-14',
        'likes' => '250',
        'image' => 'https://static3.srcdn.com/wordpress/wp-content/uploads/2020/05/michael-scott-feature-image-for-the-office.jpg',
        'image_alt' => 'Michael screaming'
    ],

    [
        'id' => '8',
        'author_id' => '4',
        'author' => $authors[3]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>Wikipedia is the best thing ever. Anyone in the world can write anything they want about any subject so you know you are getting the best possible information.</p><p>I feel God in this Chili’s tonight I don’t care what they say about me. I just want to eat. Which I realize is a lot to ask for. At a dinner party. I’m guessing Angela is the one in the neighborhood that gives the trick-or-treaters toothbrushes. Pennies. Walnuts. How is it possible that in five years, I’ve had two engagements and only one chair?</p><p>Do I need to be liked? Absolutely not. I like to be liked. I enjoy being liked. I have to be liked. But it’s not like this compulsive need like my need to be praised.</p><p>I learned a while back that if I do not text 911, people do not return my calls. Um, but people always return my calls because they think that something horrible has happened.</p>",
        'published_date' => '2020-10-13',
        'likes' => '500',
        'image' => 'https://img1.looper.com/img/gallery/the-offices-michael-scott-was-almost-a-murderer/intro-1591207215.jpg',
        'image_alt' => 'Michael grimasing'
    ],

    [
        'id' => '9',
        'author_id' => '5',
        'author' => $authors[4]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>I find the mystery genre disgusting. I hate being titillated. I am proud to announce that there is a new addition to the Martin family. She’s hypoallergenic. She doesn’t struggle when you try to dress her. She’s a third-generation show cat. Her father was in ‘Meet the Parents.’ Needless to say, she was very, very expensive.</p>
        <p>Sometimes the clothes at Gap Kids are just too flashy. I normally don’t enjoy making people laugh.</p>",
        'published_date' => '2020-10-12',
        'likes' => '100',
        'image' => 'https://s.yimg.com/uu/api/res/1.2/a7PgvEtqTnI74ESFB8aJ8g--~B/aD0zMjg7dz01MDA7c209MTthcHBpZD15dGFjaHlvbg--/http://media.zenfs.com/en-US/homerun/hello_giggles_454/a786ff28b7506f3966b127ab2ea8c53d',
        'image_alt' => 'Angela with a small smile'
    ],

    [
        'id' => '10',
        'author_id' => '5',
        'author' => $authors[4]['name'],
        'title' => "The people person's paper people",
        'content' => "<p>I find the mystery genre disgusting. I hate being titillated. I am proud to announce that there is a new addition to the Martin family. She’s hypoallergenic. She doesn’t struggle when you try to dress her. She’s a third-generation show cat. Her father was in ‘Meet the Parents.’ Needless to say, she was very, very expensive.</p>
        <p>Sometimes the clothes at Gap Kids are just too flashy. I normally don’t enjoy making people laugh.</p>",
        'published_date' => '2020-10-10',
        'likes' => '60',
        'image' => 'https://www.datocms-assets.com/151/1471782480-angela.jpg?w=500&fm=jpg',
        'image_alt' => 'Angela looking bored'
    ]
];
