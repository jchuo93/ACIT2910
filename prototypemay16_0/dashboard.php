<?php

require_once('Utils.php');
require_once('DashboardManager.php');
require_once('Parameters.php');

    $data = array("status" => "not set!");

    if(Utils::isPOST()) {
        $dm = new DashboardManager();

        $parameters = new Parameters("POST");

        $action = $parameters->getValue('action');

        /*if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }*/

        switch($action) {

            case "addUser":
                $items = json_decode($_POST['items'], true);

                $dm->addUser($items);
                $data = $items; //you return data to the jquery ajax call by echoing the data
                break;

        	case "addProduct":
                $items = json_decode($_POST['items'], true);

                $dm->addService($items);
                $data = $items; //you return data to the jquery ajax call by echoing the data
                break;

            case "addFood":
                $items = json_decode($_POST['items'], true);

                $dm->addFood($items);
                $data = $items; //you return data to the jquery ajax call by echoing the data
                break;

            case "removeProduct":
                $items = json_decode($_POST['items'], true);

                $dm->removeService($items);
                $data = $items;
                break;

            case "removeFood":
                $items = json_decode($_POST['items'], true);

                $dm->removeFood($items);
                $data = $items;
                break;

            case "removeUser":
                $items = json_decode($_POST['items'], true);

                $dm->removeUser($items);
                $data = $items;
                break;
        }


    } else {
        $data = array("status" => "error", "msg" => "Only POST allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);



?>
