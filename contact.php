<?php
$heading = 'Contact Us';
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function activeURL($value) {
    return ($_SERVER['REQUEST_URI']) === $value;
}

require "views/contact.view.php";