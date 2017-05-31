<?php

$conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");

function binary_tree_update($userid,$placementid,$place)
{
	$conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");
	
	$updateQuery = "update users set sponsorid = ".$placementid." where userid='".$userid."'"; 
	mysqli_query($conn,$updateQuery);
	//for starting users
	if($place == 'right')
	{
		$columnname = "rightmember";
	}else if($place == 'left')
	{
		$columnname = "leftmember";
	}
	
	$qry = 'select * from users WHERE userid = '.$placementid;
	$res = mysqli_query($conn,$qry);
	$next_placementid = 0;
	while($rows = mysqli_fetch_array($res))
	{
		$place_string = '';
		if($rows[$columnname] == 0)
		{
			$place_string = $place;
			$placement_column = $columnname;
		}
		if($place_string != '')
		{
			//echo "<br>".$place_string."=====".$userid."=====".$placement_column."=====".$rows['userid']."</br>";
			$updateQuery = "update users set placementid = ".$rows['userid'].",placement='$place_string' where userid='".$userid."'"; 
			mysqli_query($conn,$updateQuery);
			$updateQuery = "update users set $placement_column='$userid' where userid='".$rows['userid']."'";
			mysqli_query($conn,$updateQuery);
			return "SUCCESS";	
		}
		$next_placementid = $rows[$columnname];
	}

	$query = 'select * from users where userid >= '.$next_placementid;
	//echo $query."<br>********FIRST*********";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result))
	{
		$place_string = '';
		if($row['leftmember'] == 0)
		{
			$place_string = 'left';
			$placement_column = 'leftmember';
		}
		else if($row['rightmember'] == 0)
		{
			$place_string = 'right';
			$placement_column = 'rightmember';
		}
		if($place_string != '')
		{
			//echo "<br>".$place_string."=====".$userid."=====".$placement_column."=====".$row['userid']."</br>";
			$updateQuery = "update users set placementid = ".$row['userid'].",placement='$place_string' where userid='".$userid."'"; 
			mysqli_query($conn,$updateQuery);
			$updateQuery = "update users set $placement_column='$userid' where userid='".$row['userid']."'";
			mysqli_query($conn,$updateQuery);
			return "SUCCESS";	
		}
	}
}
/*
for ($i =1 ;$i < 10 ;$i++)
{
	mysqli_query($conn,"INSERT INTO `users` (`userid`, `username`, `password`, `sponsorid`, `placementid`, `placement`, `leftmember`, `rightmember`, `firstname`, `middlename`, `lastname`, `email`, `profile_image`, `email_verification_token`, `email_verified`, `role_id`, `status`, `entry`, `last_login`, `created_date`) VALUES (NULL, 'amit', '123456', '0', '0', '', '0', '0', '', '', '', '', '', '', '', '', '', '0', '2017-05-24 00:00:00', '2017-05-24 00:00:00');");
	$id = mysqli_insert_id($conn);
	update($id,6,'left');
}*/


function direct_comm()
{
	$conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");
	$select_query = 'SELECT * FROM users WHERE status=\'active\' and YEAR(created_date) = YEAR(NOW()) and MONTH(created_date) = MONTH(NOW())';
	$result = mysqli_query($conn,$select_query);
	while($row = mysqli_fetch_array($result))
	{
		$select_query1 = "select sum(total) as TOTAL_COMM from (SELECT up.userid,((sum(up.quantity)*pm.package_amount)*0.06) as total FROM  user_packages up  LEFT JOIN package_master pm ON up.package_id=pm.package_id WHERE up.status='accepted' AND up.userid='".$row['sponsorid']."' group by up.package_id) as a group by userid";
		$result1 = mysqli_query($conn,$select_query1);
		while($row1 = mysqli_fetch_array($result1))
		{
			$update = "INSERT INTO direct_comm(userid,amount,date,status) values(".$row['sponsorid'].",".$row1['TOTAL_COMM'].",NOW(),'billed')";
			mysqli_query($conn,$update);
		}

	}
}
//direct_comm()
?>