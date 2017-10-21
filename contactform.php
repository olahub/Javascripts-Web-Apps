<?php 4
 $origin = array('lagos' , 'ogun' ,'ondo','osun', 'imo' , 'dellta');//will drop down to show array of states when select state is clicked


 ?>






<!DOCTYPE html>
<html>
<head>
	<title>contactform</title>
</head>
<body>
<?php 
 if (isset($_POST['submit'])) { //when the submit is clicked if input is empty ,it will read error.
 	$error =array();

 	if(empty($_POST['firstname'])){
 		$error[] ="Please Enter firstname";
 	}else {
 		$firstname = $_POST['firstname'];
 	}

 	if(empty($_POST['lastname'])){
 		$error[] ="Please Enter Your lastname";
 	}else {
 		$lastname = $_POST['lastname'];
 	}

    if(empty($_POST['email'])){
 		$error[] ="Please Enter Your email";
 	}else {
 		$email = $_POST['email'];
 	}

    if(empty($_POST['add'])){
 		$error[] ="Please Enter Your Contact Adddress";
 	}else {
 		$add = $_POST['add'];
 	}

 	if(empty($_POST['occupation'])){
 		$error[] ="Please Enter Your occupation";
 	}else {
 		$occupation = $_POST['occupation'];
 	}

 	if(empty($_POST['num'])){
 		$error[] ="Please Enter Your Mobile nummber ";
 	}else {
 		$num = $_POST['num'];

 	}

 	if(empty($_POST['state'])){
 		$error[] ="Please Enter Your State of origin";
 	}else {
 		$state = $_POST['state'];
 	}

 	if(empty($_POST['sex'])){
 		$error[] ="Please Enter Your gender";
 	}else {
 		$sex = $_POST['sex'];
 	}

 	if (empty($error)){
 		echo"<p>Name : $firstname  $lastname</p>";
 		echo"<p>Gender: $sex</p>";
 		echo"<p>state of Origin : $state </p>";
 		

 		unset($firstname);
 		unset($lastname);
 		unset($sex);
 		unset($occupation);


 	}else{
 		foreach ($error as $err ) {
 			echo "<p>".$err."</p>";
 		}
 	}
 		
 	};
 
 ?>
 	
<form action="" method="POST" >
	<fieldset>
	   <h2>Admin. Register</h2>
		<p>firstname:<input type="text" name="firstname" value="<?php if(isset($firstname)){ echo $firstname;}?>"></p>
		<p>lastname:<input type="text" name="lastname" value="<?php if(isset($lastname)){ echo $lastname;}?>"></p>
		<p>email:<input type="text" name="email" value="<?php if(isset($email)){ echo $email;}?>"></p>
		<p>address:<input type="text" name="add" value="<?php if(isset($add)){ echo $add;}?>"></p>
		<p>occupation:<input type="text" name="occupation" value="<?php if(isset($occupation)){ echo $occupation;}?>"></p>
		<p>phone number:<input type="text" name="num" value="<?php if(isset($num)){ echo $num;}?>"></p>
		
		<p>state of Origin:<select name="state">
							<option value="">select state</option>
			<?php foreach ($origin as $state_origin) {?>

			<option value="<?php echo $state_origin?>"
			<?php if(isset($state) && $state == $state_origin){ echo 'selected = "selected"';}?> 
			<?php echo $state_origin ?></option>
			<?php } ?>
		</select>
		</p>
		<p>gender: male<input type="radio" name="sex" value="Male">
		  female<input type="radio" name="sex" value="Female">

		</p>
		<button name="submit" value="submit">Submit</button>
	</fieldset>
</form>
</body>
</html>