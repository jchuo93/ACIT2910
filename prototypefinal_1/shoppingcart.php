<?php

require_once('Utils.php');
require_once('ShoppingCartManager.php');
require_once('Parameters.php');

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        $scm = new ShoppingCartManager();

        $parameters = new Parameters("POST");

        $action = $parameters->getValue('action');

        /*if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }*/

        switch($action) {

            case "addToCart":


                $items = json_decode($_POST['items'], true);
                $scm->addItemsToCart($items,'1');

                $data = $items;
                break;
        }


    } else {
        $data = array("status" => "error", "msg" => "Only POST allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);



?>