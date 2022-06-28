<?php
/* Page.php の内容を拡張する */
include_once 'Page.php';
class My_HTML extends Page {
	function confirmPage() {
		$body = '';
		$body = $body . '<form method="post" action="index.php">';
			$body = $body . '<input type="submit" name="page" value="修正"></input>';
			$body = $body . '<input type="submit" name="page" value="確定"></input>';
		$body = $body . '</form>';
		return $body;
	}

	function modifyPage() {
		$body = '';
		$body = $body . '<form method="post" action="index.php">';
			$body = $body . '<input type="submit" name="page" value="確認"></input>';
		$body = $body . '</form>';
		return $body;
	}

	function endPage() {
		$body = '';
		$body = $body . '<p>確定しました</p>';
		return $body;
	}

	function inputPage(){
		$body = '';
		$body = $body . '<form method="post" action="index.php">';
			$body = $body . '<input type="radio" name="q1" value="1">経済学<br>';
			$body = $body . '<input type="radio" name="q1" value="2">経営学<br>';
			$body = $body . '<input type="radio" name="q1" value="3">会計学<br><br>';

			$body = $body . '<input type="checkbox" name="q2[]" value="1">陸上<br>';
			$body = $body . '<input type="checkbox" name="q2[]" value="2">柔道<br>';
			$body = $body . '<input type="checkbox" name="q2[]" value="3">卓球<br><br>';

			$body = $body . 'ID<input type="text" name="shimei"><br>';
			$body = $body . 'パスワード<input type="password" name="password"><br><br>';

			$body = $body . '<input type="submit" name="page" value="回答"></input>';
		$body = $body . '</form>';
		return $body;
	}
}

?>
