<?php
class Page {
	private $title;
	private $body;

	function setTitle( $title ) {
		$this->title = $title;
	}

	function setBody( $body ) {
		$this->body = $body;
	}

	function display() {
		print '<!DOCTYPE html>'."\n";
		print '<html>'."\n";
		print '<head>'."\n";
		print '<title>'.$this->title.'</title>'."\n";
		print '</head>'."\n";
		print '<body>'."\n";
		print $this->body;
		print '</body>'."\n";
		print '</html>'."\n";
	}
}
?>
