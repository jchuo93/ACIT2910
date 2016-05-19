<?php

require_once('FoodManager.php');
require_once('Utils.php');



    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new FoodManager();
        $rows = $pm->listFood();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {

            foreach($rows as $row) {
                $sku = $row['food_id'];
                $name = $row['name'];
                $image = $row['image'];
                $price = $row['price'];
                $desc = $row['description'];
                $course = $row['course'];




                $html .= "<tr>
                            <td>$sku</td>
                            <td>$name</td>
                            <td>$desc</td>
                            <td>$price</td>
                            <td>$image</td>
                            <td>$course</td>
                            <td><input data-sku-remove='$sku' type='button' value='Remove'/></td>
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
