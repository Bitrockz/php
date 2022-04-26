<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forma kredita</title>
</head>
<body>
	<p>Application for a loan in HoneBank</p>
	<form method="POST" action="loan.php">
		Name:
		<input name="FirstName" type="text">
		Surname:
		<input name="LastName" type="text">
		age:
		<input name="Age" type="text" size="3">
		<p>your place of resdence:</p>
		<textarea> 
			name="Address" rows="4" cols="40">
		</textarea>
		<p>Please indicate your current salary:</p>
		<SELECT NAME="Salary">
			<option VALUE=0>up to $10000</option>
			<option VALUE=10000>$10000 - $25000</option>
			<option VALUE=25000>$25000 - $50000</option>
			<option VALUE=50000>more than $50000</option>
		</SELECT>
		<p>Select the amount of the required loan:</p>
		<input name="Loan" type="radio" value="1000">$1000 at 8,0% per annum
		<input name="Loan" type="radio" value="5000">$5000 at 11,5% per annum
		<input name="Loan" type="radio" value="10000">$10000 at 15,0% per annum


		<a href="http://formphp/main.php">
			<input type="submit" value="Apply">
		</a>
		<input type="reset" value="Clear">
	</form>
	
</body>
</html>