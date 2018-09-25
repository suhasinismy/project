<?php

class Product{
         public $conn=null;
 
		 public function __construct($DbConn){
		   $this->conn  = $DbConn;
		 }

		 public function get_nutspro(){
			$sql = "SELECT * from product where cat_id=46";
			$query = mysqli_query($this->conn,$sql);
	        return $query;		
		}

		 public function get_oilpro(){
			$sql_oil = "SELECT * from product where cat_id=44";
			$query = mysqli_query($this->conn,$sql_oil);
	        return $query;		
		}

		public function get_pastapro(){
			$sql_pasta= "SELECT * from product where cat_id=45";
	        $query_pasta = mysqli_query($this->conn,$sql_pasta);
	        return $query_pasta;	
		}

		public function get_Offerpro(){
			$sql_offer= "SELECT * from product where cat_id=47";
	        $query_offer = mysqli_query($this->conn,$sql_offer);
	        return $query_offer;	
		}

		public function productbyprice($maxrange,$minrange){
			$sqlprobyprice= "SELECT * from product where pro_price between $minrange and $maxrange and cat_id=46";
	        $query_price = mysqli_query($this->conn,$sqlprobyprice);
	        //echo $sqlprobyprice;
	        return $query_price;	
		}

		public function productbypriceoil($maxrange,$minrange)
		{
			$sql_oilprice = "SELECT * from product where pro_price between $minrange and $maxrange and cat_id=44";
			$query_priceoil = mysqli_query($this->conn,$sql_oilprice);
	        return $query_priceoil;	
	       // echo $sql_oilprice;
		}

       public function product_pastares($maxrange,$minrange)
		{
			$sql_pasta= "SELECT * from product where pro_price between $minrange and $maxrange  AND cat_id=45";
			$query_pasta = mysqli_query($this->conn,$sql_pasta);
	        return $query_pasta;	
		}

}