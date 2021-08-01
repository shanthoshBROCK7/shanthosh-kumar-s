<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'base');
if(isset($_POST["import"]))
{
	$fileName = $_FILES["file"]["tmp_name"];
	if($_FILES["file"]["size"]>0)
	{
		$file = fopen($fileName,"r");
		while(($column = fgetcsv($file, 1000,","))!==FALSE)
		{
			$pass=md5($column[2]);

			$sqlInsert =" insert into data(name , email, password) values ('".$column[0] ."','".$column[1]."','".$pass."')";
			$result = mysqli_query($con,$sqlInsert);
			if(!empty($result))
			{
				echo "csv data imported into the database";
				
			}
			else
			{
				echo "problem in importing csv file";
			}
		}
	}
}
 ?>