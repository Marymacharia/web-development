<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MOBILE CAR WASH</title>
	<link rel="stylesheet" href="carwashservice.css">
</head>

<body>
    <form action="washservice.php" method="Post">

	<div class="wrapper">
    <div class="title">
      MOBILE CAR WASH SERVICES
    </div>
    <div class="form">
    <div class="input_field">
      <label>Car Model</label>
      <input type="text" name="carModel" required class="input">
    </div>
     <div class="input_field">
      <label>Car Color</label>
      <input type="text" name="carColor" required class="input">
    </div>
     <div class="input_field">
      <label>Car Plate</label>
      <input type="text" name="carPlate" required class="input">
    </div>

<div class="input_field">
      <label>Car Type</label>
      <div class="custom_select">
        <select name="carType" required>
          <option selected hidden value="">Select CarType</option>
          <option value="Convertible">Convertible</option>
          <option value="Coupe">Coupe</option>
          <option value="HatchBack">HatchBack</option>
          <option value="MiniVan">MiniVan</option>
          <option value="Motocycle">Motocycle</option>
          <option value="Pick-Up">Pick-Up</option>
          <option value="Sedan">Sedan</option>
          <option value="Station Wagon">Station Wagon</option>
          <option value="SUV">SUV</option>
        </select>
      </div>
    </div>

       <div class="input_field terms">
      <label class="check">
        <p>Car Services</p>
        (CHECK ALL THAT APPLY)
        <br /><br />

        <input type="checkbox" value="Body Washing" name="checkservice" ><strong> Body Washing</strong>
        <br /> <br />
        <input type="checkbox" value="Interior Cleaning" name="checkservice" ><strong>Interior Cleaning</strong>
           <br /> <br />
        <input type="checkbox" value="Under Washing" name="checkservice" ><strong>Under Washing</strong> 
           <br /> <br />
        <input type="checkbox" value="Buffing" name="checkservice" ><strong>Buffing </strong> 
           <br /> <br />
        <input type="checkbox" value="Engine Washing" name="checkservice" ><strong>Engine Washing</strong> 
           <br /> <br />
        <span class="checkmark"></span>

      </label>

    </div>
    
    <div class="input_field terms"> 
    <label class="radio">
    <p> PaymentMethod </p>
      <br />  

    <input type="radio" name="PaymentMethod" value="Mpesa"/> Mpesa  <br />  <br />  
    <input type="radio" name="PaymentMethod" value="AirtelMoney"/> AirtelMoney <br />  <br />       
    <input type="radio" name="PaymentMethod" value="Paypal"/> PayPal <br />  <br />   
    <input type="radio" name="PaymentMethod" value="Cash"/> Cash <br />    <br /> 
     
    </div>                    
 
  <div class="input_field">
      <input type="submit" value="submit" name="submit" class="btn">
    </div>
  </div>
</div>

</form> 

</body>
</html>