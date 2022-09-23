<?php 

class CRUD{

	//membuat function select
	function sData($table, $conn){

		$sData = "SELECT * FROM $table";
		$exec  = $conn->query($sData);
		return $exec;

	}
}

?>