<?php
include '../CompanyHub.php';
$configs = include '../config.php';
$domain = $configs['domain'];
$secret = $configs['secret'];

//==========================================================================
//createRecord : it takes 2 parameters and both are compulsory.
//$response = $companyHub->createRecord($tableName, $data);
//==========================================================================

$tableName = "contact";
$companyHub = new CompanyHub($domain, $secret);

$fields = array('Name' => 'Test Account');
$response = $companyHub->createRecord($tableName, $fields);
echo "Create Record<br>";
echo "Success : ". $response->Success ."<br>";
echo "Record ID : ". $response->Id ."<br>";


?>