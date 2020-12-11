<?php 

	class Item_Model extends CI_Model {
		
		function save_data($name, $quantity, $price) {
    		$query = "INSERT into items values('', '$name', '$quantity', '$price')";
    		$this->db->query($query);
  		}
		  
  		function view_data(){
  			$query = $this->db->query("SELECT * from items");
  			return $query->result();
  		}

  		function get_detail($item_id){
  			$query = $this->db->query("SELECT * from items where item_id='$item_id'");
  			return $query->result();
  		}

  		function update_item($item_id, $name, $quantity, $price){
  			 $query = $this->db->query("UPDATE items set name='$name', quantity='$quantity', price='$price' where item_id='$item_id'");
  		}

  		function delete_item($item_id){
  			$query = "DELETE from items where item_id='$item_id'";
    		$this->db->query($query);
  		}

  		function count_items(){
  			$query =$this->db->query("SELECT SUM(quantity) AS x FROM items"); 
  			return $query->result();
  		}

  		function financial_value(){
  			$query =$this->db->query("SELECT SUM(quantity*price) AS y FROM items"); 
  			return $query->result();
  		}
	}

 ?>