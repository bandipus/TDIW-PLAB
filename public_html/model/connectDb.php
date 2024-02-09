<?php

function getConn()
{
    $server = "127.0.0.1";
    $DBname = "tdiw-j3";
    $username = "tdiw-j3";
    $password = "kBqniipQ";
    
    return pg_connect("host=$server dbname=$DBname user=$username password=$password");
}