<?php

class TestSoapServer {
    public function getMessage()
    {
        return 'Hello, World!';
    }
}

$options = ['uri' => 'http://localhost:8080/soap_server.php?wsdl'];
$server = new SoapServer("test.wsdl", $options);
$server->setClass('TestSoapServer');
$server->handle();
