<?php

declare(strict_types=1);
require_once __DIR__ . '/data.php';
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.

// Comparison function to get the newswest post first
function date_compare($element1, $element2)
{
    $datetime1 = strtotime($element1['published_date']);
    $datetime2 = strtotime($element2['published_date']);
    return $datetime2 - $datetime1;
}
