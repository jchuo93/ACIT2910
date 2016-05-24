<?php



require_once('DBConnector.php');

class DashboardManager{

	private $db = null;
	private $maxid = null;
	public static $employee = 100;


	public function __construct() {
        $this->db = DBConnector::getInstance();

        

    }

    public function listUsers(){
        $sql = "SELECT room_id, password FROM room";
        $rows = $this->db->query($sql);
        return $rows;
    }

    public function addUser($items){
            $roomid = $items[0]['roomid'];
            $password = $items[0]['password'];


            $sql = "INSERT into room (room_id, password) values ($roomid, '$password');";
            $this->db->affectRows($sql);
    }

    public function addService($items){

        //maybe put this as a service method later
        //counts how many id numbers there are
        //$rows = $this->db->query("Select service_id from service");
        //$maxid = count($rows, COUNT_NORMAL);

        //add one to use as the new id for each new submission to the products
        //$maxid++;


            $name = $items[0]['name'];
            $image = $items[0]['image'];
            $price = $items[0]['price'];
            $desc = $items[0]['desc'];

            $sql = "INSERT into service (name, image, price, description) values ('$name', '$image', '$price', '$desc');";
            $this->db->affectRows($sql);



    }

    public function addFood($items){

        //maybe put this as a service method later
        //counts how many id numbers there are
        //$rows = $this->db->query("Select service_id from service");
        //$maxid = count($rows, COUNT_NORMAL);

        //add one to use as the new id for each new submission to the products
        //$maxid++;


            $name = $items[0]['name'];
            $image = $items[0]['image'];
            $price = $items[0]['price'];
            $desc = $items[0]['desc'];
            $course = $items[0]['course'];

            $sql = "INSERT into food (name, image, price, description, course) values ('$name', '$image', '$price', '$desc', '$course');";
            $this->db->affectRows($sql);



    }

    public function removeService($service_id){
        $sql = "delete from service where service_id = $service_id";
        $this->db->affectRows($sql);
    }

    public function removeFood($food_id){
        $sql = "delete from food where food_id = $food_id";
        $this->db->affectRows($sql);
    }

    public function removeUser($room_id){
        $sql = "delete from room where room_id = $room_id";
        $this->db->affectRows($sql);
    }


}


?>