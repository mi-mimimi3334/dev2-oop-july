<?php

    include "../classes/Sales.php";

    $user = new Sales;

    $user->login($_POST);

?>