<?php

    include_once '../config.php';
    include_once '../utils.php';

    $dbConn = connect($db);

    $sql = $dbConn->prepare("SELECT * FROM tarea");
    $sql->execute();
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    header("HTTP/1.1 200 OK");
    echo json_encode( $sql->fetchAll()  );
    exit();
    
?>