<?php
include '../CompanyHub.php';
$configs = include '../config.php';
$domain = $configs['domain'];
$secret = $configs['secret'];

//==========================================================================
//updateRecord : it takes 3 parameters and all are compulsory.
//$companyHub->updateRecord($tableName,$recordId, $data);
//==========================================================================

$tableName = "contact";
$companyHub = new CompanyHub($domain, $secret);

//24 is Just for exmaplem, ID should be valid
$recordId = 24;

$fields = array('Name' => 'Test Updated');
$response = $companyHub->updateRecord($tableName, $recordId, $fields);
echo "Update Record<br>";
echo "Success : ". $response->Success ."<br>";
echo "Record ID : ". $response->Id ."<br>";


?>