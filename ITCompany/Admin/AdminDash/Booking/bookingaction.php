<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'itcompany');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["Customer_Name"]);
$email = mysqli_real_escape_string($connect, $input["Customer_Email"]);
$phone = mysqli_real_escape_string($connect, $input["Customer_Phone"]);
$btc = mysqli_real_escape_string($connect, $input["Best_Time_To_Call"]);
$service = mysqli_real_escape_string($connect, $input["Service"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE booking 
 SET Customer_Name = '".$name."', 
 Customer_Email = '".$email."',
 Customer_Phone = '".$phone."',
 Best_Time_To_Call = '".$btc."',
 Service = '".$service."' 
 WHERE Id = '".$input["Id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM booking 
 WHERE Id = '".$input["Id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
