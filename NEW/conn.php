<?php

// database connection

$servername =  'localhost';
$username = 'root';
$password = '';
$dbname = 'xyz';
 $conn= new mysqli("localhost","root",'',"xyz");
 $link=mysqli_select_db($conn, $dbname);

 if($conn->connect_error)
 {
     die('Connection failed :' .conn->connect_error);
 }
 
     
 
 /*if(isset($_POST[""]))
{
    mysqli_query($conn, "delete from reg where idNo  ='$_POST[idNo]'");
    echo "Record deleted successfully"; 
}
*/
/*if(isset($_POST["submit1"]))
{
    mysqli_query($link, "update reg set name  ='$_POST[idNo]' where idNo  ='$_POST[idNo]'");
    echo "Record updated successfully"; 
}*/
/*if(isset($_POST["submit4"]))
{
    $res= mysqli_query($conn, "select *from xyz");
    echo"<table border=1>";
    echo"<tr>";
    echo"<th>";  echo "fName"; echo"</th>";
    echo"<th>";  echo "idNo"; echo"</th>";
    echo"<th>";  echo "email"; echo"</th>";
    echo"<th>";  echo "phone"; echo"</th>";
    echo"<th>";  echo "password"; echo"</th>";
    echo"</tr>";
    while($row= $res->fetch_assoc())
    {
    echo"<tr>";
    echo"<td>";  echo $row["fName"]; echo"</td>";
    echo"<td>";  echo $row["idNo"]; echo"</td>";
    echo"<td>";  echo $row["email"]; echo"</td>";
    echo"<td>";  echo $row["phone"]; echo"</td>";
    echo"<td>";  echo $row["password "]; echo"</td>";
    echo"</tr>";
    }
    echo"</table>";
 }
 if(isset($_POST["submit5"]))
{
    $res= mysqli_query($conn, "select from xyz where fName='$_POST[fName]'");
    echo"<table border=1>";
    echo"<tr>";
    echo"<th>";  echo "fName"; echo"</th>";
    echo"<th>";  echo "idNo"; echo"</th>";
    echo"<th>";  echo "email"; echo"</th>";
    echo"<th>";  echo "phone"; echo"</th>";
    echo"<th>";  echo "password"; echo"</th>";
    echo"</tr>";
    while($row=mysqli_fetch_array($res))
    {
    echo"<tr>";
    echo"<td>";  echo $row["fName"]; echo"</td>";
    echo"<td>";  echo $row["idNo"]; echo"</td>";
    echo"<td>";  echo $row["email"]; echo"</td>";
    echo"<td>";  echo $row["phone"]; echo"</td>";
    echo"<td>";  echo $row["password "]; echo"</td>";
    echo"</tr>";
    }
    echo"</table>";
 }*/
 /*$sql = "SELECT id, firstname, lastname FROM admission";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) 
 {
      // output data of each row
       while($row = $result->fetch_assoc())
      {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
           }
          } else {
                echo "0 results";
              }
              $conn->close();*/
             

?>