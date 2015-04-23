<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
//GET http://harrisonsouth.co.uk/blip/api/servers
$app->get('/servers', 'getServers');

//POST http://harrisonsouth.co.uk/blip/api/server

/**
* Use this to add in the inital values for a server, you should expect to have at the very least the name of the server,
* but there is the possibility to have IP Address (ip), Location (location), HDD Size Available (hdsize), RAM Size Available (ramsize),
* these should all be accessed like $body['ip'].
*/

$app->post('/server', function() use ($app){
	$server = array(); //array to hold server details
	

	$request = $app->request();
	$body = $request->getBody(); //equivalent to $_POST 
	$body = json_decode($body, true); //convert into an array

	//check if name is in request - this is required therefore an error if not sent
	if(isset($body['name'])){
		$server['name'] = $body['name']; //put name in array
	} else {
		$app->response->setStatus(400); //send a BAD REQUEST status
		exit;
	}
	
	//this is not a required field right now so if it does not exist then ignore it.
	if(isset($body['location'])){
		$server['location'] = $body['location'];
	}
	
	if(isset($body['ip'])){
		$server['ip'] = $body['ip'];
	}
	
	if(isset($body['hdsize'])){
		$server['hd_size'] = $body['hdsize'];
	}
	if(isset($body['ramsize'])){
		$server['ram_size'] = $body['ramsize'];
	}
	
	echo $server['location'];
});

$app->run();

function getServers(){
$sql = "SELECT * FROM server";
$mysqli = getMysqli();
try {
	$myArray = array();
	$results = $mysqli->query($sql);
	while($row = $results->fetch_array(MYSQL_ASSOC)) {
		$myArray[] = $row;
	}
	echo '{"servers": ' . json_encode($myArray) . '}';
} catch(Exception $e){
	echo '{"error":{"text":' . $e->getMessage() . '}}';
}

}
function addServer(){
$app->response->setStatus(400);
$app= \Slim\Slim::getInstance();
$request = $app->request();
$body = $request->getBody();
$event = json_decode($body);
var_dump($body);


}
function getMysqli(){

require 'mysqli.php';
return $mysqli;

}



?>