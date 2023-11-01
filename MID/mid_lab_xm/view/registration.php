<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
</head>

<body>
	<center>
		<form action="../controller/regcheck.php" method="post">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<fieldset>
							<legend>
								<h3>REGISTRATION</h3>
							</legend>
							Id<br /><input type="text" name="username"><br />
							Password<br /><input type="password" name="password"><br />
							Confirm Password<br /><input type="password" name="confirm_password"><br />
							Name<br /><input type="text" name="name"><br />
							User Type
							<hr />
							<input type="radio" name="user_type" value="User" />User
							<input type="radio" name="user_type" value="Admin" />Admin
							<hr />
							<input type="submit" value="Sign Up">
							<a href="login.php">Sign In</a>
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	</center>

</body>

</html>