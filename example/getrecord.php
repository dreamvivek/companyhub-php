<?php
include '../CompanyHub.php';
$configs = include '../config.php';
$domain = $configs['domain'];
$secret = $configs['secret'];

//==========================================================================
//getRecord : it takes 2 parameters and both are compulsory.
//$response = $companyHub->getRecord($tableName, $recordId);
//==========================================================================

$tableName = "contact";

$companyHub = new CompanyHub($domain, $secret);

$recordId = 1;
$response = $companyHub->getRecord($tableName, $recordId);
echo "Single Record<br>";
echo "Total : ". $response->Total ."<br>";
$record = $response->Data;
print_r($record);


?>