<?php

require 'api/mysqli.php';

$mysqli = getDatabase();


$mysqli->query("UPDATE server s, server_status ss SET online_status = 0 WHERE time < now() - 60 AND s.server_id = ss.server_id");


?>