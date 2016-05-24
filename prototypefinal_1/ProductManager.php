<?php

require_once('DBConnector.php');

$um = new ProductManager();

// Facade
class ProductManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function listProducts() {
        $sql = "SELECT service_id, name, image, price, description FROM service";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function findProduct($prod_id) {
        $params = array(":prod_id" => $prod_id);
        $sql = "SELECT service_id, name, image, price, description FROM service WHERE service_id = :prod_id";

        $rows = $this->db->query($sql, $params);
        if(count($rows) > 0) {
            return $rows[0];
        }

        return null;
    }


}
?>
