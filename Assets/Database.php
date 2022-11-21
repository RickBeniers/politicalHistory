<?php
    $host = "127.0.0.1";
    $port = 3306;
    $user = "root";
    $password = "";
    $dbname = "politicalhistorydb";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $connection = mysqli_connect($host, $user, $password, $dbname, $port);
        mysqli_set_charset($connection, 'latin1');
        $DatabaseAvailable = true;
    }catch (mysqli_sql_exception $e) {
        $DatabaseAvailable = false;
    }
    if(!$DatabaseAvailable) {
        echo '<h4>E001 - Database not available. Tip: restart database engine.</h4>';
        die();
    }
    return $connection;
    $connection->close();

?>