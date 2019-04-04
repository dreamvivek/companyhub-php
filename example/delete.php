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

//24 is Just for exmaplem, ID should be valid and should be array
$recordIds = array(24);
$response = $companyHub->deleteRecords($tableName, $recordIds);
echo "Delete Record<br>";
echo "Response : <br>";
print_r($response);

?>