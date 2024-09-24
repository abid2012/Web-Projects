<?php

include "../model/db.php";

$sql = "SELECT StID,StName,Grade,Section FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
   
    echo '<table style="padding: 10px; font-size:23px; width: 100%">';
    echo '<tr> <th style="border: 1px grey solid; background-color: #f2f2f2;">Student ID</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Student Name</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Grade</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Section</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Actions</th> </tr>';
    while($row = $result->fetch_assoc()) {
      echo '<tr> <td style="border: 1px grey solid">' . $row["StID"]. "</td>" .'<td style="border: 1px grey solid">'. $row["StName"]. "</td>". '<td style="border: 1px grey solid">' . $row["Grade"]. "</td>". '<td style="border: 1px grey solid">' . $row["Section"]. "</td>" . '<td style="border: 1px grey solid">' . "<a href='../view/editstudent.php'><button class='reg'>Edit</button></a>" . "<a href='../view/deletestudent.php'><button class='del'>Delete</button></a>" . "</td>". '</tr>'. "<br>";
      
    }
    //echo "</table>";
    echo "</table>";

  } else {
    echo "0 results";
  }
$conn->close();


?>