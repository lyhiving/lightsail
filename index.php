<?php

require_once ('vendor/autoload.php'); 

$client = new \Aws\AwsClient(["service" => 'lightsail',
'version' => 'latest',
'region'  => 'ap-southeast-1']);
print_r($client);