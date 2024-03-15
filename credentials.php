<?php

class connectionParams {}
$param = new ConnectionParams();

$param->host = "localohst";
$param->port = 5432;
$param->user = "dzickus";
$param->password = "Dylan839";

$hoststring = "";
foreach($param as $value => $key){
    $hoststring = $hoststring . $key ."=". $value . " ";
}

echo $hoststring;