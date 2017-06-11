<?php

class binaryTree{		
		function __construct() {
			$CI =& get_instance();
			$CI->load->database();
	        $this->conn = mysqli_connect($CI->db->hostname, $CI->db->username, $CI->db->password,$CI->db->database);
	        $this->payput_percentage = 5;
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

		function getTotalAmount($userids =array(),$week_start,$week_end)
		{
			$in_query = '';
			if(count($userids) > 0)
			{
				$userid_string = implode(",",$userids);
				if($userid_string != '')
				{
					$in_query = " AND up.userid IN (".$userid_string.")";
				}
			}
			echo $query = "SELECT sum(pm.package_amount*up.quantity) as total FROM user_packages up LEFT JOIN package_master pm ON up.package_id=pm.package_id WHERE up.acceptance_date >= '".$week_start."' AND up.acceptance_date <= '".$week_end."' ".$in_query;

			$result = mysqli_query($this->conn,$query);
			$total = 0;
			while($row = mysqli_fetch_array($result))
			{
				$total = $row['total'];
			}
			return $total;	
		}

		function release_payout()
		{
			$week_start = date("Y-m-d", strtotime('monday this week'));
			$week_end =  date("Y-m-d", strtotime('sunday this week'));

			$query = "SELECT * FROM users where userid = 1";
			$result = mysqli_query($this->conn,$query);
			while($row = mysqli_fetch_array($result))
			{
				$members = $this->get_members($row['userid']);
				
				$left_income_total = 0;
				$right_income_total = 0;
				if(count($members['left']) > 0)
				{
					$left_income_total = $this->getTotalAmount($members['left'],$week_start,$week_end);
				}
				if(count($members['right']) > 0)
				{
					$right_income_total = $this->getTotalAmount($members['right'],$week_start,$week_end);
				}
				//dump($left_income_total);
				//dump($right_income_total);
				if($left_income_total > 0 && $right_income_total > 0)
				{
					$carry_forward = 0;
					$amt = 0;
					$placement = '';
					if($left_income_total < $right_income_total)
					{
						$carry_forward = $right_income_total - $left_income_total;
						$placement = 'right';
						$amt = $left_income_total;
					}else if($right_income_total < $left_income_total)
					{
						$placement = 'left';
						$carry_forward = $left_income_total - $right_income_total;
						$amt = $right_income_total;
					}else
					{
						$placement = '';
						$carry_forward = 0;
						$amt = $left_income_total;
					}
					echo "amt".$amt."perc".$this->payput_percentage;
					dump($carry_forward);

					echo $release_payment = $amt * ($this->payput_percentage/100);
					$insert_query = "INSERT INTO binary_income(userid,binary_total,left_binary_total,right_binary_total,carry_forward,placement,week_start,week_end,payout_status,created_date) VALUES(".$row['userid'].",".$release_payment.",".$left_income_total.",".$right_income_total.",".$carry_forward.",'".$placement."','".$week_start."','".$week_end."','generated','".date("Y-m-d H:i:s")."')";
					mysqli_query($this->conn,$insert_query);
				}
			}
		}
	}



//$obj = new binaryTree();
//dump($obj->release_payout());
?>