<?php
include '../CompanyHub.php';
$configs = include '../config.php';
$domain = $configs['domain'];
$secret = $configs['secret'];

$companyHub = new CompanyHub($domain, $secret);

//==========================================================================
//getRecords : it takes 4 parameters.
//$tableName is compulsory, $start & limit are for pagination and $searchText is optional.
//$response = $companyHub->getRecords($tableName, $start, $limit, $searchText);
//==========================================================================

$start = 0;
$limit = 5;
$tableName = "contact";
$response = $companyHub->getRecords($tableName, $start, $limit);
echo "GET Result<br>";
echo "Total : ". $response->Total . "<br>";
foreach($response->Data as $record){
	print_r($record);
}

?>