<?php

require_once('DashboardManager.php');
require_once('Utils.php');



    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new DashboardManager();
        $rows = $pm->listUsers();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {

            foreach($rows as $row) {
                $room_id = $row['room_id'];
                $password = $row['password'];



                $html .= "<tr>
                            <td>$room_id</td>
                            <td>$password</td>

                            <td><input data-sku-remove='$room_id' type='button' value='Remove'/></td>
                          </tr>";
            }

        }

        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }
     

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
