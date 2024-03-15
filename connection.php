<?php

include("credentials.php");

$credentials = get_credentials();

$conn = pg_connect($credentials);

echo $conn;