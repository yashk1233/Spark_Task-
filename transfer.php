<?php
include("config/config.php");
$custname = $_POST['Custname'];
$sender = $_POST['sender'];
$amount = (int)$_POST['amount'];

echo $custname;
echo "<br>";
echo $amount;
echo "<br>";
echo $sender;
echo "<br>";


$sql = "insert into transaction (sender,reciever,amount) values('$sender','$custname','$amount')";

if(mysqli_query($mysql, $sql)){
    $sql2 = "update customer set balance = balance+".$amount." where name= '".$custname."' ";
    if(mysqli_query($mysql, $sql2)){

        header("location:customer.php");
    }
    else{
        echo "Error .\n".mysqli_error();
    }

}


    else
        echo "Error .\n".mysqli_error();
 
mysqli_close($mysql);


?>
