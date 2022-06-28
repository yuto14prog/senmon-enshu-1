<?php
include_once  'My_HTML.php';

$page = new My_HTML();
$page->setTitle('テスト');

$body = $page->inputPage();

$page->setBody($body);
$page->display();
?>