<?php

require_once('ProductManager.php');
require_once('Utils.php');



    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();
        $count = 0;

        $html = "";
        if(!$rows || count($rows) == 0) {
            $html = "<tr><td>There are no results.</td></tr>";
        } else {

            foreach($rows as $row) {
                            $count++;

                            $sku = $row['service_id']; 
                            $name = $row['name'];
                            $image = $row['image'];
                            $price = $row['price'];
                            $desc = $row['description'];
                            $html .= "<div class='alert alert-info text-left col-lg-4'>
                                        <form class='form'>
                                            <img src='towel.jpg' alt='$image'>
                                            <h3>$name</h3>
                                            <p>$desc</p>
                                            <button type='submit' class='btn btn-default'>Add to cart</button>


                                            <input class='ui-spinner-button' data-count='$count' data-price='$price' type='number' value='1' min='1' max='10'/>
                                            <span data-price='$price' id='price$count'>$$price</span>

                                        </form>
                                      </div>";

                                      //implement the front-end-tricks banner and image gallery so it'll be in a grid format? or find a way to do this through bootstrap (navbar tabs? required some specific js for it)

                                      //remove the ui spinner button for services that don't require it (add a new row in the table and then an if statement here to append that in or not)
            }

        }

        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }
     

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
