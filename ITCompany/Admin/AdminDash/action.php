<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'itcompany');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["Name"]);
$email = mysqli_real_escape_string($connect, $input["Email"]);
$pass = mysqli_real_escape_string($connect, $input["Password"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE users 
 SET Name = '".$name."', 
 Email = '".$email."',
 Password = '".$pass."' 
 WHERE Id = '".$input["Id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM users 
 WHERE Id = '".$input["Id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
