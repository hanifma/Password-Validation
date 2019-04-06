<?php
function formVadilationPassword($password){
	$minVal = strlen($password) == 8; //term validation
	$kapVal = preg_match('/[A-Z]/', $password); //term validation
	$lowVal = preg_match('/[a-z]/', $password); //term validation
	$specVal = preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password); //term validation
	
	if ($minVal && $kapVal && $lowVal && $specVal) {
		echo "password true";
	}else{
		echo "password false";
	}
}
$pass = "ASAsS%^&"; //example password
formVadilationPassword($pass);
?>
