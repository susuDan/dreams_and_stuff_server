<?php

////// Setting up a test php server for mobile backend
// $response[$cmd] = array('err' => 1 ....
$response = array('err' => 1, 'text' => array("Hello?", "Fuck you!", "Yes?", "What do you want?"));
$result = json_encode($response);

echo $result

?>