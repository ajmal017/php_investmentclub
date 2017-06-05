<?php
class binaryTree{		
		function __construct() {
	        $this->conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");
	        $this->leftmembers = array();
	        $this->rightmembers = array();
	    }
		function get_left_members($parent_id)
		{
			$query = "select * from users where userid='".$parent_id."'";
			$result = mysqli_query($this->conn,$query);
			while($row = mysqli_fetch_array($result))
			{	
				$userid = $row['userid']; //for updating userid data
				
				if($row['leftmember'])
				{
					array_push($this->leftmembers,$row['leftmember']);
					$this->get_left_members($row['leftmember']);
				}
				if($row['rightmember'])
				{
					array_push($this->leftmembers,$row['rightmember']);
					$this->get_left_members($row['rightmember']);
				}
			}
		}

		function get_right_members($parent_id)
		{
			$query = "select * from users where userid='".$parent_id."'";
			$result = mysqli_query($this->conn,$query);
			while($row = mysqli_fetch_array($result))
			{	
				$userid = $row['userid']; //for updating userid data
				
				if($row['leftmember'])
				{
					array_push($this->rightmembers,$row['leftmember']);
					$this->get_right_members($row['leftmember']);
				}
				if($row['rightmember'])
				{
					array_push($this->rightmembers,$row['rightmember']);
					$this->get_right_members($row['rightmember']);
				}
			}
		}

		function get_members($parent_id)
		{
			$query = "select * from users where userid='".$parent_id."'";
			$result = mysqli_query($this->conn,$query);
			while($row = mysqli_fetch_array($result))
			{	
				$userid = $row['userid']; //for updating userid data
				
				if($row['leftmember'])
				{
					array_push($this->leftmembers,$row['leftmember']);
					$this->get_left_members($row['leftmember']);
				}
				if($row['rightmember'])
				{
					array_push($this->rightmembers,$row['rightmember']);
					$this->get_right_members($row['rightmember']);
				}
			}

			return array("left"=>$this->leftmembers,"right"=>$this->rightmembers);
		}
	}


//$obj = new binaryTree();
//dump($obj->get_members(1));
?>