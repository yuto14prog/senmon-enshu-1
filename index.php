<?php
include_once  'My_HTML.php';

// print_r($_POST);
$page = new My_HTML();

if ( isset($_POST['page']) ) {
  if ($_POST['page'] == '回答') {
    $page->setTitle('確認');
    $body = $page->confirmPage();
    $page->setBody($body);
  } else if ($_POST['page'] == '修正') {
    $page->setTitle('修正');
    $body = $page->modifyPage();
    $page->setBody($body);
  } else if ($_POST['page'] == '確認') {
    $page->setTitle('確認');
    $body = $page->confirmPage();
    $page->setBody($body);
  } else if ($_POST['page'] == '確定') {
    $page->setTitle('確定');
    $body = $page->endPage();
    $page->setBody($body);
  } else {

  }
} else {
  $page->setTitle('入力');
  $body = $page->inputPage();
  $page->setBody($body);
}
$page->display();

?>