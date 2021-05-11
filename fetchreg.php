<head>
<style type="text/css">
.myTable { background-color:#c1dbfc;border-collapse:collapse;color:#000;font-size:18px; }
.myTable th { background-color:#0090ec;color:white;width:30%; }
.myTable td, .myOtherTable th { padding:2px;border:0; }
.myTable td { border-bottom:1px dotted #7B68EE; }
</style>
  </head>
<!-- End Styles -->
 <body bgcolor="003974">
 </body>
<?php
   include("openDB.php"); 
if ($db_found) {
$SQL = "SELECT * FROM reg";
$result = mysql_query($SQL);

//print '<table border="1"';
print' <table class="myTable" align=center>'; 

print'<th>id</th><th>FirstName</th><th>LastName</th><th>Gender</th><th>Email</th><th>CountryCode</th><th>PhoneNo.</th>';  

while ( $db_field = mysql_fetch_assoc($result) ) {

print '<tr align=center>';
print '<td>'.$db_field['id'].'</td>';
print '<td>'.$db_field['firstName'].'</td>';
print '<td>'.$db_field['lastName'].'</td>';      
print '<td>'.$db_field['Gender'].'</td>';
print '<td>'.$db_field['email'].'</td>';    
print '<td>'.$db_field['countrycode'].'</td>';
print '<td>'.$db_field['phonenumber'].'</td>';    
print '</tr>'; 
}   
print '</table>';

mysql_close($db_handle);
}
else {
print "Database NOT Found ";
mysql_close($db_handle);
}

?>
