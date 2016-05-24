<?php



require_once('DBConnector.php');

class ShoppingCartManager{

    private $db = null;

    public function __construct() {
        $this->db = DBConnector::getInstance(); 

    }

    public function checkoutCart($id) {
        $sql = "UPDATE cart SET state = 'checked out' WHERE ID = $id";
        $count = $this->db->affectRows($sql);
        return $count;
    }

    public function addItemsToCart($items, $cart_id) {


            $id = $items[0]['id'];
            $qty = $items[0]['quantity'];
            $type = $items[0]['type'];

            $sql = "INSERT INTO cart_food (cart_id, food_id, quantity)  VALUES ($cart_id, $id, $qty);";
            $this->db->affectRows($sql);
            

    }


}


?>