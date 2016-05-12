<?php

require_once('ProductManager.php');
require_once('Utils.php');



    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {

            foreach($rows as $row) {
                $sku = $row['service_id'];
                $name = $row['name'];
                $desc = $row['description'];
                $price = $row['price'];
                $image = $row['image'];


                $html .= "<tr>
                            <td>$sku</td>
                            <td>$name</td>
                            <td>$desc</td>
                            <td>$price</td>
                            <td>$image</td>
                            <td><input data-sku-add='$sku' type='button' value='Edit'/></td>
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
