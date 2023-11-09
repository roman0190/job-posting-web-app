<?php
include_once("../../controller/Auth/loginCheck.php");



?>
<html>

<head>
	<title>My Jobs</title>
	<link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
	<?php include_once("../components/header.php") ?>
	<center>
		<form action="" method="POST" enctype="">

			<h3>Login</h3>
			<hr style="margin: 20px 100px;">
			<table class="form" border="0" cellspacing="0" cellpadding="0">



				<tr>
					<td><label for="username">Username</label> </td>
					<td> : <input type="text" name="username" value="<?php echo $username ?>" </td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="color:red;"><?= $usernameError ?></p>
					</td>
				</tr>

				<tr>
					<td><label for="password">Password</label> </td>
					<td> : <input type="text" name="password" value="<?php echo $password ?>" </td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="color:red;"><?= $passwordError ?></p>
					</td>
				</tr>

			</table>
			<input type="checkbox" name="remember" value="remember" <?= $remember ? 'checked="checked"' : '' ?>> Remember me<br>
			<p style="margin-bottom: 20px;"><a style="margin-bottom: 20px;" href="registration.php">Dont Have an Account? Sign Up</a></p>
			<p style="margin-bottom: 20px;"><a style="margin-bottom: 20px;" href="forgot.php">Forgot your Password?</a></p>
			<div style="margin-top: 50px;">
				<p style="color: red;"><?= $error ?></p>

				<input type="submit" value="Sign In" name="submit" />



			</div>


		</form>
	</center> <?php include_once("../components/footer.php") ?>
</body>

</html>