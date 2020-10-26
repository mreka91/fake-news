<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';


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
    <!-- own js-->
    <script type="text/javascript" src="main.js"></script>

    <title>Dunder Mifflin !Fake News Site</title>
</head>

<body>

    <!-- NAV-->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light ">
        <a class="navbar-brand" href="index.php">Dunder Mifflin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="authors.php">Contact</a>
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