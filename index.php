<?php
$pages = ['frontpage', 'projects', 'background', 'about', 'contact'];
$langs = ['da', 'en'];

$page = $_GET['page'] ?? 'frontpage';
$lang = $_GET['lang'] ?? 'da';

if (!in_array($lang, $langs, true)) {
    $lang = 'da';
}

if (!in_array($page, $pages, true)) {
    http_response_code(404);
    $page = '404';
}

$strings = require "lang/$lang.php";

function t(string $key): string {
    global $strings;
    return nl2br(htmlspecialchars($strings[$key] ?? $key));
}

function url(string $page, ?string $l = null): string {
    global $lang;
    $l ??= $lang;
    return "index.php?page=$page&lang=$l";
}

include 'includes/header.php';
include "pages/$page.php";
include 'includes/footer.php';