<?php
ini_set('display_errors','1');
include "connection.php";

function newPayment()

	{
		global $connection;

		$phoneNumber=$_POST['phoneNumber'];
		$amount=$_POST['amount'];

		$sqlQuery="insert into transactions (phoneNumber,amountPaid) values ('$phoneNumber','$amount')";
		
		if (mysqli_query($connection,$sqlQuery)) {
			echo "waad ku guuleysatay";
		}else{
			echo "qalad ayaa dhacay: ".mysqli_error($connection);
		}

		mysqli_close($connection);

		

	}

function transactionsList()

{
	global $connection;

	$sqlQuery="select * from transactions";

	$runQuery=mysqli_query($connection,$sqlQuery);

	if (mysqli_num_rows($runQuery) > 0 ) {

		while ($row=mysqli_fetch_assoc($runQuery)) {
			
			$phoneNumber=$row['phoneNumber'];
			$amount=$row['amountPaid'];
			$id=$row['transactionId'];

			echo 

			"

			<tr>

				<th scope='row'>$id</td>
		      	<td >$phoneNumber</th>
		      	<td>$amount</td>
		      
		    </tr>


			";


		}
		


	}else{

		echo "meesha waa eber";
	}
}
