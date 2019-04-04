# CompanyHub-PHP

A simple library to consume [CompanyHub](https://companyhub.com) API in PHP. 
You must have a look at CompanyHub [API Documentation](https://companyhub.com/docs/api-documentation). 

**Requirement - PHP extension needs to be enabled**
 - php_openssl 
 - php_curl

# Usage
Include and init CompanyHub with credentials.	
```php
	include 'CompanyHub.php';
	
	//COMPANYHUB API DETAILS
	$domain = "YOUR_DOMAIN";
	$secret = "YOUR_SECRET";
	
	$companyHub = new CompanyHub($domain, $secret);
	//If invalid credentials are provided then it will throw error
```
To get all records of a table (With pagination & Search)
```php
	//getRecords : it takes 4 parameters.
	//$tableName is compulsory, $start & limit are for pagination and $searchText is optional.
	$response = $companyHub->getRecords($tableName, $start, $limit);
	foreach($response->Data as $record){
		print_r($record);
	}
	//Searching
	$searchText = "ab";
	$response = $companyHub->getRecords($tableName, $start, $limit, $searchText);
	foreach($response->Data as $record){
		print_r($record);
	}
```
To get a particular record by ID
```php
	//getRecord : it takes 2 parameters and both are compulsory.
	$response = $companyHub->getRecord($tableName, $recordId);
	$record = $response->Data;
```
To create new record
```php
	//createRecord : it takes 2 parameters and both are compulsory.
	$fields = array('Name' => 'Vivek Muthal');
	$response = $companyHub->createRecord($tableName, $fields);
	//$response->Success: is status true or false
	//$response->Id: is newly created id of record
```
To update a record by ID
```php
	//updateRecord : it takes 3 parameters and all are compulsory.
	$fields = array('Name' => 'Vivek MuthalUpdated');
	$recordId = 1;
	$response = $companyHub->updateRecord($tableName, $recordId, $fields);
	//$response->Success: is status true or false
```
To delete single or multiple records
```php
	$recordIds = array(1,2,3);
	$response = $companyHub->deleteRecords($tableName, $recordIds);
	print_r($response);
```
# License
The MIT License (MIT)

Copyright (c) 2019 Vivek Muthal

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Author : Vivek Muthal  
Email :  [vivek@dreamwares.com](mailto:vivek@dreamwares.com)  
Website :  [www.dreamwares.com](http://dreamwares.com)