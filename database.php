<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["eu-cdbr-west-03.cleardb.net"];
$cleardb_username = $cleardb_url["bad5aecd13cdf8"];
$cleardb_password = $cleardb_url["d54a4ebe"];
$cleardb_db = substr($cleardb_url["heroku_eb66d9444754fb0"],1);

$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>
