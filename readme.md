# CompanyHub-PHP

A simple library to consume [CompanyHub](https://companyhub.com) API in PHP. 
You must have a look at CompanyHub [API Documentation](https://companyhub.com/docs/api-documentation). 

**Requirement - PHP extension needs to be enabled**
 - php_openssl 
 - php_curl

# Usage
As shown in example.php include and init CompanyHub with credentials.	
```php
	include 'CompanyHub.php';
	
	//COMPANYHUB API DETAILS
	$domain = "YOUR_DOMAIN";
	$secret = "YOUR_SECRET";
	
	$companyHub = new CompanyHub($domain, $secret);
```
To test authentication
```php  
	$response = $companyHub->getData("/me");
	echo "GET : " . $response . "</br>";
```
To get all records of a table
```php
	$response = $companyHub->getData("/contact");
	echo "GET : " . $response . "</br>";
```
To get a particular record by ID
```php
	$response = $companyHub->getData("/contact/1");
	echo "GET : " . $response . "</br>";
```
To create new record
```php
	$fields = array('Name' => 'Vivek Muthal');
	$response = $companyHub->postData("contact", $fields);
	echo "POST : " . $response . "</br>";
```
To update a record by ID
```php
	$recordId = 1;
	$fields = array('Name' => 'Vivek MuthalUpdated');
	$response = $companyHub->postData("contact", $fields, $recordId);
	echo "PUT : " . $response . "</br>";
```
To delete single or multiple records
```php
	$deleteIds = array('deletedIds' => array(1,2,3));
	$response = $companyHub->deleteData("contact", $deleteIds);
	echo "DELETE : " . $response . "</br>";
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