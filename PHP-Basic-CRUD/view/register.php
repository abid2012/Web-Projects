<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Teacher Registrarion Form</h1>

<form action="" method="post" onsubmit="return v()">


<table class="tbl">
  <tr>
    <td><label for="fn1">Full Name:</label></td>
  </tr>
  <tr>
  <td><input type="text" id="fn1" name="fn1" class="inp"></td>
  </tr>
  <tr>
    <td><label for="em1">Email:</label></td>
  </tr>
  <tr>
  <td><input type="email" id="em1" name="em1" class="inp"></td>
  </tr>
  <tr>
    <td><label for="pas1s">Password:</label></td>
  </tr>
  <tr>
  <td><input type="password" id="pass1" name="pass1" class="inp"></td>
  </tr>
  <tr>
    <td><label for="cpass1">Confirm Password:</label></td>
  </tr>
  <tr>
  <td><input type="password" id="cpass1" name="cpass1" class="inp"></td>
  </tr>
  <tr>
    <td><label for="ss">Subject Specialization:</label></td>
  </tr>
  <tr>
  <td>
      <select id="ss" name="ss" class="inp">
        <option value="Math">Math</option>
        <option value="English">English</option>
        <option value="other">Other</option>
      </select>
    </td>
  </tr>
 
 
  <tr>
    <td><label for="yoe">Years of Experience:</label></td>
  </tr>

  <tr>
  <td><input type="tel" id="yoe" name="yoe" class="inp"></td>
  </tr>

  <tr>
    <td><label for="qual">Qualification:</label></td>
  </tr>

  <tr>
  <td>
        <textarea name="qual" id="qual" rows="4" col="10" class="inp"></textarea>
    </td>
  </tr>
 
  <tr>
    <td colspan="2"><button type="submit" name="submit" class="reg">Register</button></td>
  </tr>
</table>



</form>


<script src="../js/script.js"></script>

</body>
</html>



<?php

include "../control/registercontrol.php";

?>