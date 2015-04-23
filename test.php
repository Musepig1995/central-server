<?php


$fields = array("name" => "Harrison", "location" => "London");
$fields = json_encode($fields);

$ch = curl_init();



curl_setopt($ch, CURLOPT_URL, "http://www.harrisonsouth.co.uk/blip/api/server");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$result = curl_exec($ch);

if(empty($result)){
	echo "Data not correctly entered, please try running php original-send.php again. \n";
} else {
	echo $result . "\n";
}



?>