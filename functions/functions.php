<?php
    $myscli = false;
    function connectDB () {
        global $mysqli;
        $mysqli = new mysqli ("localhost", "root", "", "coderlibrary");
        $mysqli->query ("SET NAMES 'utf-8'");
    }

    function closeDB () {
        global $mysqli;
        $mysqli->close ();
    }

    function getItemsNum ($table) {
        global $mysqli;
        connectDB ();
        $result = $mysqli->query ("SELECT count(*) FROM $table");
        $rowsNum = $result->fetch_row();
        closeDB ();
        return $rowsNum[0];
    }

    function getList ($table, $page, $pageSize) {
        global $mysqli;
        connectDB ();
        $first = ($page - 1) * $pageSize;
        $result = $mysqli->query ("SELECT * FROM $table ORDER BY id DESC LIMIT $first, $pageSize");
        closeDB ();
        return resultToArray ($result);
    }

    function resultToArray ($result) {
        $array = array ();
        while ($row = $result->fetch_assoc())
            $array[] = $row;
        return $array;
    }
?>