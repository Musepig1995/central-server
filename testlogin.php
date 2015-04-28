<?php
$username = $_POST[username];
$password = $_POST[password];
$password = json_encode($password);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://harrisonsouth.co.uk/blip/api/users/$username/login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $password);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
if(empty($result)){
	echo "Data not correctly entered, please try running php original-send.php again. \n";
} else {
	echo $result . "\n";
}
?>
