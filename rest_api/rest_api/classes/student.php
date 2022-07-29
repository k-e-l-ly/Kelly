<?php 
class Student{
	public $name;
	public $email;
	public $mobile;
	public $id;

	private $conn;
	private $table_name;

	// constructor
	public function __construct($db){
		$this->conn= $db;
		$this->table_name= "tbl_students";
	}

	public function create_data(){

		// sql query to insert Data
		$query = "INSERT INTO ". $this->table_name." SET name = ?, email = ?, mobile = ? "; 

		//prepare the sql
		$obj = $this->conn->prepare($query); 


		//sanitize input variables => basically removes the extra chaaracters like some special symbols as well as if some tags available in input values

		$this->name = htmlspecialchars(strip_tags($this->name));
		$this->email = htmlspecialchars(strip_tags($this->email));
		$this->mobile = htmlspecialchars(strip_tags($this->mobile)); 

		$obj->bind_param('sss', $this->name, $this->email, $this->mobile);

		if($obj->execute()){
			return true;
		}
		else{
			return false;
		}

	}

	// Read all data

	public function get_all_data(){

		$sql_query ="SELECT * FROM ".$this->table_name;
		$std_obj = $this->conn->prepare($sql_query);

		//execute query
		$std_obj->execute();

		return $std_obj->get_result();

	}

}
?>