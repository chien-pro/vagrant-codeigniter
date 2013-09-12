<?php
function myHash($mail, $pass)
	{
		$hash = hash('sha256', $mail.$pass).T_CONST;
		$hash = hash('sha256', $hash);
		return $hash;
	}
?>