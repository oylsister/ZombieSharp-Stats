<?php

require "database.php";

$result_num = 0;
$start = 0;
$row_per_page = 10;

function getResultTable($name)
{
    global $result_num, $start, $row_per_page;

    if(isset($_GET['page_nb'])) {
        $page = $_GET['page_nb'] - 1;
        $start = $page * $row_per_page;
    }

    $db = connect();

    if(strlen($name) !== 0) {
        $record = "SELECT * From zsharp_stats WHERE player_name LIKE \"$name%\";";
        $sql = "SELECT * From zsharp_stats WHERE player_name LIKE \"$name%\" LIMIT $start, $row_per_page;";
    }

    else {
        $record = "SELECT * From zsharp_stats";
        $sql = "SELECT * From zsharp_stats LIMIT $start, $row_per_page;";
    }
    
    $total_query = $db->query($record);
    $query = $db->query($sql);

    $data_result = $query->fetchAll(PDO::FETCH_ASSOC);    
    $result_num = $total_query->rowCount();

    return $data_result;    
}

function getResultCount()
{
    global $result_num;
    return $result_num;
}

function getTotalPage()
{
    global $result_num, $row_per_page;
    return ceil($result_num / $row_per_page);
}

?>