<?php
	set_error_handler('errorHandler', E_All);

	function errorHandler($number, $text, $file, $line) {
		if (ob_get_length()) ob_clean();

		$errorMessage = 'Error: ' . $number . chr(10) .
						'Message: ' . $number . chr(10) .
						'File: ' . $number . chr(10) .
						'Line: ' . $number;

		echo $errorMessage;
		exit;
	}
?>