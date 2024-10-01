<html>
<head>
<title><h1>Student Registration Form</h1></title>
</head>
<body>

	<h1>Student Registration Form</h1>
	<form action="" method="POST" align="center">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br/><br/>
		
		<label for="age">Age:</label>
		<input type="number" name="age" id="age" required><br/></br>
		
		<label for="name">Email:</label>
		<input type="email" name="email" id="eamil" required></br></br>
		
		
		<label for="phone">Phone:</label>
		<input type="tel" name="phone" id="phone" required></br></br>
	
		
		<label for="course">Course:</label>
		<input type="text" name="course" id="course" required></br></br>
		
		
		<label for="gender">Gender:</label>
		<input type="radio" name="gender" id="male" value="Male" required>
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="Female" required>
		<label for="female">Female</label></br></br>
		
		
		<label for="city">City:</label>
		<input type="text" name="city" id="city" required></br></br>
		<input type="submit" name="submit" id="submit" value="submit">
		<a href="form.php">Go to Back</a>
	</form>
	</body>
	</html>