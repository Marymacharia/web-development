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
   include("openDB2.php"); 
if ($db_found) {
$SQL = "SELECT * FROM servwash";
$result = mysql_query($SQL);

//print '<table border="1"';
print' <table class="myTable" align=center>'; 

print'<th>ID</th><th>CarColor</th><th>CarColor</th><th>CarPlate</th><th>CarType</th><th>Service</th><th>Payment</th>';  

while ( $db_field = mysql_fetch_assoc($result) ) {

print '<tr align=center>';
print '<td>'.$db_field['id'].'</td>';
print '<td>'.$db_field['carModel'].'</td>';
print '<td>'.$db_field['carColor'].'</td>';      
print '<td>'.$db_field['carPlate'].'</td>';
print '<td>'.$db_field['carType'].'</td>';    
print '<td>'.$db_field['checkservice'].'</td>';
print '<td>'.$db_field['PaymentMethod'].'</td>';    
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

