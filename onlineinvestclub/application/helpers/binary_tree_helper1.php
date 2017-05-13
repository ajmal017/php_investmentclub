<?php
class binaryTree{
		
		function __construct() {
	        $this->conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");		
	    }
		
		function qualified_update()
		{
			$query2 = "select * from users";
			$res2 = mysqli_query($this->conn,$query2);
			while($row2 = mysqli_fetch_array($res2))
			{	
				$userid = $row2['userid']; //for updating userid data
				
				if($row2['entry']==0)
				{
					if($row2['userid']==1)
					{
						$placementid = "none";
						$place = "none";
					}
					else
					{
						$ans = $this->find_empty();
						print_r($ans);
						$fans = explode("#",$ans);
						//print_r($fans);
						$id = $fans[1]; //for id of sponsor to update its left or right
						$placementid = $fans[2]; //for sponsorid
						$place = $fans[0];  //for placement
						if($place=="Left")
						{
							$columnname = 'leftmember';
						}
						else if($place=="Right")
						{
							$columnname = 'rightmember';
						}
						$updatemember = "update users set $columnname='$userid' where userid='$id'";
						mysqli_query($this->conn,$updatemember);
					}
					$update_sp_pl = "update users set placementid = '$placementid', placement = '$place', entry = '1' where userid='$userid'";
					mysqli_query($this->conn,$update_sp_pl);
				}
			}
		}

		function update($sponsorid,$userid,$place = 'left')
		{
			if($place == 'left')
			{
				$columnname = 'leftmember';
			}else if($place == 'right')
			{
				$columnname = 'rightmember';
			}
			$query = "select * from users where userid = $sponsorid and $columnname = 0";
			echo $query."<br>";
			$result = mysqli_query($this->conn,$query);
			while($row = mysqli_fetch_array($result))
			{
				//,$columnname='$sponsorid
				$updatemember="update users set placementid='$sponsorid',placement='$place' where userid='$userid' ";
				echo $updatemember."<br>";
				mysqli_query($this->conn,$updatemember);
				$query = "update users set $columnname = '$userid' where userid='$sponsorid' ";
				echo $query."<br>";
				mysqli_query($this->conn,$query);
				echo "===1===";
				return True;
			}

			
			echo $query = "select * from users where userid=$sponsorid and $columnname != 0";
			$result = mysqli_query($this->conn,$query);
			while($row = mysqli_fetch_array($result))
			{
				$select_query = "select * from users where userid=".$row[$columnname]."";
				echo "<br>**************".$select_query."***************<br>";
				$result = mysqli_query($this->conn,$select_query);
				while($row = mysqli_fetch_array($result))
				{
					/*if($row['leftmember'] ==0)
					{
					echo $updatemember="update users set placementid='".$row['userid']."',placement='left' where userid='$userid' ";
					mysqli_query($this->conn,$updatemember);
					echo $updatequery = "update users set leftmember = '$userid' where userid='".$row['userid']."' ";
					echo "===2===";
					mysqli_query($this->conn,$updatequery);
					return array("status"=>"success","place"=>"left");
					}else if($row['rightmember'] == 0)
					{
					$updatemember="update users set placementid='".$row['userid']."',placement='right' where userid='$userid' ";
					echo $updatemember."<br>";
					mysqli_query($this->conn,$updatemember);
					$updatequery = "update users set rightmember = '$userid' where userid='".$row['userid']."' ";
					echo $updatequery."<br>";
					echo "===3===";
					mysqli_query($this->conn,$updatequery);
					return array("status"=>"success","place"=>"right");	
					}*/
					if($row['rightmember'] == 0)
					{
						$updatemember="update users set placementid='".$row['userid']."',placement='right' where userid='$userid' ";
						echo $updatemember."<br>";
						mysqli_query($this->conn,$updatemember);
						$updatequery = "update users set rightmember = '$userid' where userid='".$row['userid']."' ";
						echo $updatequery."<br>";
						echo "===3===";
						mysqli_query($this->conn,$updatequery);
						return array("status"=>"success","place"=>"right");	
					}
					echo "<br>SPONSERID ".$row['userid']." USERID".$userid." PLACE left<br>";
					$this->update($row['userid'],$userid);
				}
			}
		}
	}


/*
$binary = new binaryTree;

//print_r($binary->update(1,21,'right'));

for($i = 1;$i < 5;$i++)
{
$query3 = "INSERT INTO `users` (`username`, `password`, `sponsorid`, `placementid`, `placement`, `leftmember`, `rightmember`, `firstname`, `middlename`, `lastname`, `email`, `email_verification_token`, `email_verified`, `role_id`, `status`, `entry`, `last_login`, `created_date`) VALUES ( 'ambekar1', '123456', '0', '0', '', '0', '0', '', '', '', '', '', '', '', '', '0', '2017-05-11 00:00:00', '2017-05-11 00:00:00');";
$res3 = mysqli_query($conn,$query3);	
echo $last_id = mysqli_insert_id($conn);
print_r($binary->update(1,$last_id,'left'));
}*/

$conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");
function find_empty($sponsor_id,$userid)
{
	$conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");
	echo $query3 = "select * from users where userid > $sponsor_id";
	$res3 = mysqli_query($conn,$query3);
	while($row3 = mysqli_fetch_array($res3))
	{
		dump($row3);
		if($row3['leftmember']==0)
		{
			$place = "left";
			//$id = $row3['id'];
			$userid = $row3['userid'];
			return $place."#".$userid."#".$sponsor_id;
		}
		else if($row3['rightmember']==0)
		{
			$place = "right";
			//$id = $row3['id'];
			$userid = $row3['userid'];
			return $place."#".$userid."#".$sponsor_id;
		}
	}
}

$result  = find_empty(1,59);
dump($result);
$fans = explode("#",$result);
print_r($fans);
$userid = $fans[1]; //for id of sponsor to update its left or right
$placementid = $fans[2]; //for sponsorid
$place = $fans[0];  //for placement
if($place=="left")
{
	$columnname = 'leftmember';
}
else if($place=="right")
{
	$columnname = 'rightmember';
}
$updatemember = "update users set $columnname='$userid' where userid='$placementid'";
mysqli_query($conn,$updatemember);

$update_sp_pl = "update users set placementid = '$placementid', placement = '$place', entry = '1' where userid='$userid'";
mysqli_query($conn,$update_sp_pl);
?>