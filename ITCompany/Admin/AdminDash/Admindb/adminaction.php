<?php  
//adminaction.php
$connect = mysqli_connect('localhost', 'root', '', 'itcompany');

$input = filter_input_array(INPUT_POST);

$name = mysqli_real_escape_string($connect, $input["Username"]);
$pass = mysqli_real_escape_string($connect, $input["Password"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE admin 
 SET Username = '".$name."', 
 Password = '".$pass."' 
 WHERE Id = '".$input["Id"]."'
 ";

 mysqli_query($connect, $query);

}


echo json_encode($input);

?>
