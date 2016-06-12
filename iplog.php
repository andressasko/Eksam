<?php
include 'connect.php';
include 'header.php';

echo $_SERVER['REMOTE_ADDR']."<br>";



$sql = "INSERT INTO asasko_ip(ip)
VALUES('" . mysqli_real_escape_string($connection, $_SERVER['REMOTE_ADDR']) . "')";

$result = mysqli_query($connection, $sql);
        if(!$result)
        {
            //something went wrong, display the error
            echo 'Something went wrong while registering. Please try again later.';
			echo mysql_error(); //debugging purposes, uncomment when needed
        }
        else
        {
			
		echo 'Successfully registered ip.';
        }
		
$sql = "SELECT id FROM asasko_ip";
$result = mysqli_query($connection, $sql);
if(! $result )
{
  die("<br>".'Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
    echo "IP :".$row['ip'];
} 
echo "Fetched data successfully\n";
mysql_close($connection);
?>



