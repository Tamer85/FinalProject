<?php
class DBController {

	private $host = "182.50.133.168";
	private $user = "studDB19a";
	private $password = "stud19DB1!";
	private $database = "studDB19a";
	private $conn;

	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while ($row = $result->fetch_assoc())
		 {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn, $query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	
	function executeQuery($query) {
	    $result  = mysqli_query($this->conn, $query);
	    return $result;	
	}
}
?>
