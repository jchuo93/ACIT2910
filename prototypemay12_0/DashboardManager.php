<?php



require_once('DBConnector.php');

class DashboardManager{

	private $db = null;
	private $maxid = null;
	public static $employee = 100;


	public function __construct() {
        $this->db = DBConnector::getInstance();

        

    }

    public function addService($items){

        //maybe put this as a service method later
        //counts how many id numbers there are
        //$rows = $this->db->query("Select service_id from service");
        //$maxid = count($rows, COUNT_NORMAL);

        //add one to use as the new id for each new submission to the products
        //$maxid++;


            $name = $items[0]['name'];
            $price = $items[0]['price'];
            $desc = $items[0]['desc'];
            $staff = $items[0]['staff'];

            $sql = "INSERT into products (name, price, description, staff) values ('$name', $price, '$desc', $staff);";
            $this->db->affectRows($sql);



    }

    public function removeService($service_id){
        $sql = "delete from service where service_id = $service_id";
        $this->db->affectRows($sql);
    }
}


?>