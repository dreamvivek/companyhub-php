<?php
include 'CompanyHub.php';

//COMPANYHUB API DETAILS
$domain = "YOUR_DOMAIN";
$secret = "YOUR_SECRET";

$companyHub = new CompanyHub($domain, $secret);

//Example of GET
$response = $companyHub->getData("/me");
echo "GET : " . $response . "</br>";

//Example of CREATE
$fields = array('Name' => 'Test Account');
$response = $companyHub->postData("contact", $fields);
echo "POST : " . $response . "</br>";

//Example of UPDATE
$recordId = 1;
$fields = array('Name' => 'Contact Updated');
$response = $companyHub->postData("contact", $fields, $recordId);
echo "PUT : " . $response . "</br>";

//Example of DELETE
$deleteIds = array('deletedIds' => array(1,2,3));
$response = $companyHub->deleteData("contact", $deleteIds);
echo "DELETE : " . $response . "</br>";
?>