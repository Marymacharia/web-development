<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WELCOME TO MOBILE CAR WASH</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<form action="connect.php" method="POST">

	<div class="wrapper">
    <div class="title">
    WELCOME TO MOBILE CAR WASH
    </div>
    <div class="form">
    <div class="input_field">
      <label>First Name</label>
      <input type="text" name="firstName" required class="input">
    </div>
    <div class="input_field">
      <label>Last Name</label>
      <input type="text" name="lastName" required class="input">
    </div>
    <div class="input_field">
      <label>Gender</label>
      <div class="custom_select">
        <select name="Gender" required>
          <option selected hidden value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="input_field">
      <label>Email Address</label>
      <input type="text" name="email" required class="input">
    </div>
    <div class="input_field">
      <label>Country Code</label>
      <input type="text" name="countrycode" required class="input">
    </div>
    <div class="input_field">
      <label>Phone Number</label>
      <input type="text" name= "phonenumber" required class="input">
    </div>
    <div class="input_field terms">
      <label class="check">
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <p>Agree to Terms and Conditions</p>
    </div>

    <div class="input_field">
    	<a href="carwashservice.html">
      <input type="submit" value="Register" class="btn">
      </a>
    </div>
  </div>
</div>
</form>
</body>

</html>