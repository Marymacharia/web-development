<?php
$carModel = $_POST['carModel'];
$carColor = $_POST['carColor'];
$carPlate = $_POST['carPlate'];
$carType = $_POST['carType'];
$checkservice = $_POST['checkservice'];
$PaymentMethod = $_POST['PaymentMethod'];


if (!empty($carModel) || !empty($carColor) || !empty($carPlate) || !empty($carType) || !empty($checkservice) || !empty($PaymentMethod)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "carserv";

    //create connection
    
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    } 
    
    else{
        $SELECT = "SELECT carPlate from servwash Where carPlate = ? Limit 1";
        $INSERT = "INSERT Into servwash(carModel,carColor,carPlate,carType,checkservice,PaymentMethod) values(?,?,?,?,?,?)";
        
        //prepare statement

        $stmt = $conn->prepare($SELECT);
        $stmt-> bind_param("s",$carPlate);
        $stmt->execute();
        $stmt-> bind_result($carPlate);
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        
        if(isset($_POST["submit"]))
        {
            
            
        }
                                          
        
        if ($rnum==0){

            $stmt-> close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss",$carModel,$carColor,$carPlate,$carType,$checkservice,$PaymentMethod);
            $stmt->execute();
            echo "NEW RECORD INSERTED";    
        } else{

            "SOMEONE ALREADY REGISTERED WITH THIS PLATE";

        }
            
        $stmt->close();
        $conn->close();
    }
} else{

    echo "All fields are required";
    die();
}

  
  
?>
