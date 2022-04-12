<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:wdv495db.database.windows.net,1433; Database = productsDB", "dbtest", "Lexar-1395");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "dbtest", "pwd" => "Lexar-1395", "Database" => "productsDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:wdv495db.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>