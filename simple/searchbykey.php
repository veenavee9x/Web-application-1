<?php

include 'config.php';
include 'upper.php';

?>

<?php

$key =$_POST['key'];

$sql ="select * from sign where fname='$key'";

$result = $connection -> query($sql);

if($result -> num_rows > 0)
{
    
    echo '<table border = 1>';
    echo '<tr>

            <th>First Name</th>
            <th>Last Name</th>
            <th>Mail</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>DOB</th>
            
    </tr>';

    while($row = $result->fetch_assoc())
   {
       //echo 'name : ' . $row['fname'].' / last name ' .$row['lname'].' /  phone ' .$row['phone'];
           //echo '</br>';

           echo '<tr>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['uname'].'</td>    
                    <td>'.$row['mail'].'</td>
                    <td>'.$row['p_num'].'</td>  
                    <td>'.$row['gen'].'</td>  
                    <td>'.$row['dob'].'</td>  
                              
           </tr>';
   }

echo'</table>';
}
else
{
    echo 'First name exist';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="homenew.css">
  <style>
  </style>
</head>

<body>
<form action="index.php" method="post">
        <input type="text" name="key" placeholder="Type Back">
        <input type="submit" value="Back">
    </form>
</body>
 </html>

 <?php
    include 'nav.php';
?>