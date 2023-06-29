<?php

$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
$fileName = filter_input(INPUT_GET, 'filename', FILTER_SANITIZE_STRING);

if (!empty($url) && !empty($fileName)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');

    readfile($url);
    exit;
}
