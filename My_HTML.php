<?php
/* Page.php の内容を拡張する */
include_once 'Page.php';
class My_HTML extends Page {
	function confirmPage() {
		$body = '';
		$q1 = array();
		$q1 = [ 1 => '経済学', 2 => '経営学', 3 => '会計学',];
		$q2 = array();
		$q2 = [ 1 => '陸上', 2 => '柔道', 3 => '卓球',];
		$label = array();
		$label = [ 'q1' => '分野', 'q2' => '競技', 'shimei' => 'ID', 'password' => 'パスワード', 'page' => 'ボタン',];

		$body = $body . '<form method="post" action="index.php">';

			$body = $body.'<table border="2">';
			$body = $body.'<tr><td>添字</td><td>ラベル</td><td>値</td></tr>';
			foreach($_SESSION as $key => $value) {
				$body = $body.'<tr>';
					$body = $body.'<td>'.$key.'</td>';
					$body = $body.'<td>'.$label[$key].'</td>';
					$body = $body.'<td>';
						if ($key == 'q1') {
							$body = $body.$q1[$value];
						} else if($key=='q2') {
							$body = $body.'<table border="1">';
								$body = $body.'<tr><td>添字</td><td>値</td></tr>';
								foreach($value as $key2 => $value2){
									$body = $body.'<tr>';
										$body = $body.'<td>'.$key2.'</td>';
										$body = $body.'<td>'.$q2[$value2].'</td>';
									$body = $body.'</tr>';
								}
							$body = $body.'</table>';
						} else {
							$body = $body.$value;
						}
					$body = $body.'</td>';
				$body = $body.'</tr>';
			}
			$body = $body.'</table>';

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
