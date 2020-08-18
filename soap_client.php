<?php

$client = new SoapClient("http://localhost:8080/soap_server.php?wsdl");
echo $client->__soapCall('getMessage', null);
