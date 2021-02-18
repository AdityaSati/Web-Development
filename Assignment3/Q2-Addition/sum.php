
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sum</title>
 </head>
 <body>
 	<form method="GET" action="sum.php">
 		First Number<input type="text" name="num1" ><br>
 		Second Number<input type="text" name="num2" ><br>
 		<input type="submit" name="submit"><br>
 	</form>
 </body>
 </html>

 <?php
 if(isset($_GET['submit'])) {
 	if((empty($_GET['num1'])) || (empty($_GET['num2']))){
 		echo "Please Provide The Numbers To Perform Summation....";
 	}
 	else{
 		$sum = $_GET['num1']+$_GET['num2'];
 		echo "sum is $sum";
 	}
 } 
  ?>
