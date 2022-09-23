<?php

$db_server  = "Localhost";
$db_user    = "root";
$db_pass    = "";
$db_name    = "posfix";

$conn   = new mysqli($db_server, $db_user, $db_pass, $db_name);

function baseUrl($url)
{
    echo "http://localhost/dashboard/" . $url;
}
