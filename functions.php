<?php

declare(strict_types=1);
require_once __DIR__ . '/data.php';

// Comparison function to get the newswest post first
function date_compare(array $element1, array  $element2): int
{
    $datetime1 = strtotime($element1['published_date']);
    $datetime2 = strtotime($element2['published_date']);
    return $datetime2 - $datetime1;
}


//shorten the  text on the index page
function shortenText(string $text, $chars = 400): string
{
    $text = $text . " ";
    $text = substr($text, 0, $chars);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text . "..."; //to let the reader know the article continues
    return $text;
}


//to match the article from the articles array
function getArticleById(array $articles, string $id): array
{
    foreach ($articles as $article) {
        if ($article['id'] === $id) {
            return $article;
        }
    }
}
