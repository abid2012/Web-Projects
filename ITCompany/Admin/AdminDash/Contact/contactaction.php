<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'itcompany');

$input = filter_input_array(INPUT_POST);

$email = mysqli_real_escape_string($connect, $input["Email"]);
$phone = mysqli_real_escape_string($connect, $input["Phone"]);
$address = mysqli_real_escape_string($connect, $input["Address"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE contact 
 SET Email = '".$email."', 
 Phone = '".$phone."',
 Address = '".$address."' 
 WHERE Id = '".$input["Id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM contact 
 WHERE Id = '".$input["Id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
