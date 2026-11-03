<?php
$pages = ['index', 'about', 'services', 'practice', 'contact'];
$page = $argv[1] ?? '';

if (!in_array($page, $pages, true)) {
    fwrite(STDERR, "Unknown page: {$page}\n");
    exit(1);
}

$projectRoot = dirname(__DIR__);
chdir($projectRoot);
$_SERVER['PHP_SELF'] = $page . '.php';

include $projectRoot . DIRECTORY_SEPARATOR . $page . '.php';
