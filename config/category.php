<?php

class category{
      public $conn=null;

	 public function __construct($DbConn){
	   $this->conn  = $DbConn;
	 }

	 public function getCatListLeft(){
		$sql_cat = "SELECT * from category limit 0,10";
		$query_cat = mysqli_query($this->conn,$sql_cat);
        return $query_cat;		
	}
    
    public function getCatListRight(){
		$sql_cat = "SELECT * from category limit 10,6";
		$query_cat = mysqli_query($this->conn,$sql_cat);
        return $query_cat;		
	}

	public function getCatListkichen(){
		$sql_cat = "SELECT * from category limit 20,9";
		$query_cat = mysqli_query($this->conn,$sql_cat);
        return $query_cat;		
	}

	public function getCatDataKichenleft(){
		$sql_cat = "SELECT * from category limit 25,8";
		$query_cat = mysqli_query($this->conn,$sql_cat);
        return $query_cat;		
	}

}