<?php
class Database{
	 
    public $db = "oop"; 
    public $conn;
	public $tableName;

	public function __construct($tableName){
		$this->tableName = $tableName;
		$this->conn = new mysqli("localhost", "root","",$this->db);
	}
	public function readall()
	{
		$sql = "SELECT * FROM {$this->tableName}";
		$query = $this->conn->query($sql);
		$array =[];
		foreach ($query as $row) {
			$array[] =$row;
		}
		
		return $query;
	}
	public function read($id,$val)
	{
		$sql = "SELECT * FROM {$this->tableName} WHERE id='$val'";
		$query= $this->conn->query($sql);
		return $query;
	}
	public function delete($id)
	{
	    $sql = "DELETE FROM {$this->tableName} WHERE id=$id";
	    $query = $this->conn->query($sql);
	}

	public function insert(array $values ){
		$keys=array_keys($values);
		$keys=implode(',', $keys);

		$value=array_values($values);
		
		$value="'".implode("','",$values)."'";

		 $sql = "INSERT INTO $this->tableName ({$keys})VALUES ({$value})";
        $this->conn->query($sql);
	}

	public function update(array $values , $id)
	{

		$sentence = ''; 

		foreach ($values as $key => $value) {
			$sentence .= $key . " = " . "'" . $value . "' ,"; 
		}

		$sentence = rtrim($sentence ,',') ;

		$update = "UPDATE {$this->tableName} SET {$sentence} WHERE id = $id";

		$this->conn ->query($update);
	}

}
//insert into tablename (name , email)values ( '');


// $users->update([
// 	'id' => null ,
// 	'username'=>'ahmed',
// 	'email'=>'ahmed@gmail.com',
// 	'address'=>'alex',
// 	'password' => 123
// ]); // void


// $user = new Database("user");
// $edit = $user->update([
// 	'name'=>'eslam',
// 	'age'=>20,
// ],1

	// insert 

# -------------------------


// $users = new Database('users');

// $x = $users->readAll(); // return array 

// // print_r($x);

// // $users->read('id' , 5); // return array 

// // $users->delete('id' , 5); // void

// $users->update([
// 	'username'=>'ahmeds2222',
// 	'email'=>'ahmed@gmail.com',
// 	'password' => 50000000
// ] , 1); // void

