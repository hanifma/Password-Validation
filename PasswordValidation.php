<?php
function formVadilationPassword($password){
	$minVal = strlen($password) == 8;
	$kapVal = preg_match('/[A-Z]/', $password);
	$lowVal = preg_match('/[a-z]/', $password);
	$specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password);
	
	if ($minVal && $kapVal && $lowVal && $specVal) {
		echo "password true";
	}else{
		echo "password false";
	}
}
$pass = "ASAsS%^&";
formVadilationPassword($pass);
?>
