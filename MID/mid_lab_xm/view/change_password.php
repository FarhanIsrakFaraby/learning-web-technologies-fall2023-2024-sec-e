<?php 
    require_once('../controller/sessionCheck.php');
?>
<center>
	<form action="../controller/changePassCheck.php" method="$_POST">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="password"/><br />
						New Password<br />
						<input type="password" name="new_password"/><br />
						Retype New Password<br />
						<input type="password" name="retype_new_password"/>								
						<hr />
						<input type="button" value="Change" />     
						<a href="home.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>