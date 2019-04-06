<?php
function formVadilationUser($username){
	$minVal = strlen($username) == 8; //term validation
	$unVal = preg_match('/[_]/', $username); //term validation
	$lowVal = preg_match('/[a-z]/', $username); //term validation
	if ($minVal && $unVal && $lowVal) {
		echo "user true";
	}else{
		echo "user false";
	}
}
$user = "hanif_ma"; //option username to validate
formVadilationUser($user); //procces validation
?>
