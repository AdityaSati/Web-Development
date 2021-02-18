<?php  
include('config.php');
?>

<?php
 $id=$_GET['id'];
 $sql="SELECT * FROM `users` WHERE `id`=$id";
 $result=mysqli_query($conn,$sql);
 $row=$result->fetch_assoc();
 $username=$row['username'];
 $email=$row['email'];
 $gender=$row['gender'];
 $city=$row['city'];

 // echo "$username";
 // echo "$email";
 // echo "$gender";
 // echo "$city";

 if(isset($_POST['update'])){
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$gender=$_POST['gender'];
 	$city=$_POST['city'];

 	$sql="UPDATE `users` SET `username`='$username',`email`='$email',`gender`='$gender',`city`='$city' WHERE `id`='$id'";
 	if(mysqli_query($conn,$sql)){
 		echo "Data Updated Successfully....";
 		header("Location:details.php");
 	}
 	else{
 		echo "Updation Failed....";
 	}
 }

 ?>


<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post" action="edit.php?id=<?php echo($id) ?>">
        Username <input type="text" name="username" value="<?php echo "$username" ?>" ><br>
        Email <input type="Email" name="email" value="<?php echo "$email" ?>"><br>
        <!-- Contact <input type="text" name="contact" maxlength="10" value="<?php echo "$contact" ?>"><br> -->
        Gender<select name="gender" required value="<?php echo "$gender" ?>"><br>
        	<option disabled>None</option>
        	<option <?php if($gender=="Male"){echo "selected";} ?>>Male</option>
        	<option <?php if($gender=="Female"){echo "selected";} ?>>Female</option>
        </select><br>
        <!-- City <input type="text" name="city" value="<?php echo "$city" ?>"><br> -->
        City<select name="city" required value="<?php echo "$city" ?>"><br>
        	<option  disabled>None</option>
        	<option <?php if($city=="Denradun"){echo "selected";} ?>>Dehradun</option>
        	<option <?php if($city=="Delhi"){echo "selected";} ?>>Delhi</option>
        	<option <?php if($city=="Mumbai"){echo "selected";} ?>>Mumbai</option>
        	<option <?php if($city=="Mohali"){echo "selected";} ?>>Mohali</option>
        	<option <?php if($city=="Kolkata"){echo "selected";} ?>>Kolkata</option>
        	<option <?php if($city=="Roorkee"){echo "selected";} ?>>Roorkee</option>
        	<option <?php if($city=="Haridwar"){echo "selected";} ?>>Haridwar</option>
        	<option <?php if($city=="Hyderabad"){echo "selected";} ?>>Hyderabad</option>
        	<option <?php if($city=="Jaipur"){echo "selected";} ?>>Jaipur</option>
        	<option <?php if($city=="Chennai"){echo "selected";} ?>>Chennai</option>
        </select><br>
        <input type="submit" name="update" value="Update" ><br>
    </form>
 
 </body>
 </html>