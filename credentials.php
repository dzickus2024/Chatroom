<?php

function get_credentials(){
    class connectionParams {}
    $param = new ConnectionParams();

    $param->host = "localhost";
    $param->port = 5432;
    $param->user = "dzickus";
    $param->password = "Dylan839";

    $hoststring = "";
    foreach($param as $key => $value){
        $hoststring = $hoststring . $key ."=". $value . " ";
    }

    return $hoststring;
}