<?php
    require_once "../util/config.php";

    $sql = "SELECT * FROM veterinario";
    $result = mysqli_query($link, $sql);

    $row = mysqli_fetch_array($result);

    var_dump($row);
?>