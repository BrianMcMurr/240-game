
<!DOCTYPE html>
<html>
<head>
<body>
	<form action="check_login.php" method="post" id="form_id">
		<h2>Welcome to Math Game</h2>
		Userame:
		<input type="text" name="username" id="username" placeholder="Name" />
		<br/><br/>
		Password:
		<input type="password" name="password" id="password" placeholder="Password" /><br/><br/>
		<input type="submit" name="submit_id" id="login" value="Login" />
	</form>


	<h2>First time? Enter username and password to create a new user!</h2>
	<form action="new_user.php" method="post" id="form_id">
	Userame:
		<input type="text" name="username" id="username" placeholder="Name" />
		<br/><br/>
		Password:
	<input type="password" name="password" id="password" placeholder="Password" />
	<br/><br/>
	Class:
	<input type="text" name="class" id="class" placeholder="Class" />
	<br/><br/>
	<input type="submit" name="new" id="new" value="New User" />
	</form>
</body>
</html>
