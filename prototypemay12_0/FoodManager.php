<?php

require_once('DBConnector.php');

$um = new FoodManager();

// Facade
class FoodManager {

    private $db;

    public function __construct() {
        $this->db = DBConnector::getInstance();
    }

    public function listFood() {
        $sql = "SELECT food_id, name, image, price, description FROM food;";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function listBreakfast() {
        $sql = "SELECT food_id, name, image, price, description FROM food WHERE course LIKE 'Breakfast';";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function listLunch() {
        $sql = "SELECT food_id, name, image, price, description FROM food WHERE course LIKE 'Lunch';";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function listDinner() {
        $sql = "SELECT food_id, name, image, price, description FROM food WHERE course LIKE 'Dinner';";
        $rows = $this->db->query($sql);
        return $rows;
    }



}
?>
