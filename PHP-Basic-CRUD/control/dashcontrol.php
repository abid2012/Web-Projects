<?php

include "../model/db.php";

$sql = "SELECT CourseID,CourseName,StEnroll FROM course";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
   
    echo '<table style="padding: 10px; font-size:23px; width: 100%">';
    echo '<tr> <th style="border: 1px grey solid; background-color: #f2f2f2;">Course ID</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Course Name</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Students Enrolled</th> <th style="border: 1px grey solid; background-color: #f2f2f2;">Actions</th> </tr>';
    while($row = $result->fetch_assoc()) {
      echo '<tr> <td style="border: 1px grey solid">' . $row["CourseID"]. "</td>" .'<td style="border: 1px grey solid">'. $row["CourseName"]. "</td>". '<td style="border: 1px grey solid">' . $row["StEnroll"]. "</td>". '<td style="border: 1px grey solid">' . "<a href='../view/addstudent.php'><button class='reg'>Add Student</button></a>" . "<a href='../view/deletecourse.php'><button class='del'>Delete Course</button></a>" . "</td>". '</tr>'. "<br>";
      
    }
    //echo "</table>";
    echo "</table>";

  } else {
    echo "0 results";
  }
$conn->close();


?>

