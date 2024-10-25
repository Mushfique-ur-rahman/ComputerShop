<!DOCTYPE html>
<html>
<head>
	<title>Login/Signup Page</title>
	<style>  
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}
		input[type=text], input[type=password] {
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
		}

		input[type=submit] {
			padding: 10px;
			margin-top: 20px;
			border-radius: 5px;
			border: none;
			background-color: #4CAF50;
			color: white;
			font-weight: bold;
		}
	</style>

 
</head>
<body>
	<form action="" method="get">
		<h2>Login</h2>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<input type="submit" value="Login">
	</form>

	<form action="adduser.php" method="get">
		<h2>Signup</h2>
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required>
		<label for="email">Email:</label>
		<input type="text" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<label for="text">Phone:</label>
		<input type="text" id="phone" name="phone" required>
        <input type="submit" value="Signup">
    </form>

</body>
</html>