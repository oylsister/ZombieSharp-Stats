<?php

require "database.php";

$result_num = 0;

function getResultTable($name)
{
    global $result_num;
    $db = connect();

    if(strlen($name) !== 0) {
        $sql = "SELECT * From zsharp_stats WHERE player_name LIKE \"$name%\";";
    }

    else {
        $sql = "SELECT * From zsharp_stats;";
    }
    
    $query = $db->query($sql);

    $data_result = $query->fetchAll(PDO::FETCH_ASSOC);    
    $result_num = $query->rowCount();

    return $data_result;    
}

function getResultCount()
{
    global $result_num;
    return $result_num;
}

?>