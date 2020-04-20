 
<?php
require_once 'DB.php';
# parameters for connecting to the "business_service" 

# DSN constructed from parameters 
$dsn = "$dbtype://$username:$password@$hostspec/$database";

$username = "root";
$password = "1646631331";
$hostspec = "localhost:3306";
$database = "business_db";
// $dbtype = 'pgsql';
// $dbtype = 'oci8';
$dbtype = 'mysqli';



# Establish the connection
$db = DB::connect($dsn);
if (DB::isError($db)) {
    die($db->getMessage());
}
// require_once 'DB.php';
// var_dump(class_exists('DB', false));