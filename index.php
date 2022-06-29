<?php include 'inc/header.php'; ?>
 
 
 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
 
   
		
		
		
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td> 
			</tr>
			
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email"></td> 
			</tr>
			
			<tr>
				<td>Comment: </td>
				<td><textarea name="comment" rows="5" cols="40"></textarea></td> 
			</tr>
			
			<tr>
				<td>Gender: </td>
				<td>
				<input type="radio" name="gender" value="Male"> Male
				<input type="radio" name="gender" value="Female"> Female
				</td> 
			</tr> 
			
			<tr>
				 <td> </td>
				<td><input type="submit" name="submit"></td> 
			</tr>
		</table>
 
	</form>	
		
		<?php 
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$name     = validate($_POST["name"]);
				$email    = validate($_POST["email"]);
				$Comment  = validate($_POST["comment"]);
				$gender   = validate($_POST["gender"]);
				
			 echo "Name: ".$name."<br/>";
			echo "Email: ".$email."<br/>";
			echo "Comment: ".$comment."<br/>";
			echo "Gender: ".$gender."<br/>";
			}
			
			function validate($data){
				$data = trim( $data);
				$data = stripslashes( $data);
				$data = htmlspecialchars($data);
				return $data;
				
				
			}
			
			
		?>

<?php include 'inc/footer.php'; ?>