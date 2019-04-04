<?php
include '../CompanyHub.php';
$configs = include '../config.php';
$domain = $configs['domain'];
$secret = $configs['secret'];

//==========================================================================
//getRecords : it takes 4 parameters.
//$companyHub->getRecords($tableName, $start, $limit, $searchText);
//$tableName is compulsory, $start & limit are for pagination and $searchText is optional.
//==========================================================================

$start = 0;
$limit = 5;
$tableName = "contact";

$companyHub = new CompanyHub($domain, $secret);

$searchText = "ab";
$response = $companyHub->getRecords($tableName, $start, $limit, $searchText);
echo "Search Result<br>";
echo "Total : ". $response->Total . "<br>";
foreach($response->Data as $record){
	print_r($record);
}

?>