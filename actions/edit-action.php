<?php

    include('../classes/Sales.php');

    $edit = new Sales;
    $id = $_GET['id'];

    $edit->update($_POST, $id);

?>