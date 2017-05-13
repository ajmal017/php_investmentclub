<?php


function update($userid,$sponsorid,$place)
{
	$conn = mysqli_connect("localhost", "root", "123456","onlineinvestclub");
	//for starting users
	if($place == 'right')
	{
		$columnname = "rightmember";
	}else if($place == 'left')
	{
		$columnname = "leftmember";
	}
	
	echo $query = 'select * from users where userid = '.$sponsorid.' and '.$columnname.' = 0';
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result))
	{
		$updateQuery = "update users set placementid = $sponsorid,placement='$place' where userid='".$userid."'"; 
		mysqli_query($conn,$updateQuery);

		$updateQuery = "update users set $columnname='$userid' where userid='$sponsorid'";
		mysqli_query($conn,$updateQuery);
	}


	echo $query = 'select * from users where userid = '.$sponsorid.' and '.$columnname.' != 0';
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result))
	{

		$updateQuery = "update users set placementid = $sponsorid,placement='$place' where userid='".$userid."'"; 
		mysqli_query($conn,$updateQuery);

		$updateQuery = "update users set $columnname='$userid' where userid='$sponsorid'";
		mysqli_query($conn,$updateQuery);
	}
}
	
//update(60,1,'right')
?>