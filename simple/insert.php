<?php

include 'config.php';
include 'upper.php';

$id = $_POST['Inserid'];
$exp = $_POST['Experience'];
$aw = $_POST['Awards'];
$ab = $_POST['Abilities'];

$sql ="insert into inert(id , exp, aw, ab) values(?,?,?,?)";
$statement = $connection->prepare($sql);

$statement->bind_param("ssss", $id , $exp , $aw , $ab);

if($statement->execute())
{
    echo 'success insert';
}
else
{
    echo 'error insert';
}


?>

<?php


$sql ="select * from inert";

$result = $connection -> query($sql);

if($result -> num_rows > 0)
{
    
    echo '<table border = 1>';
    echo '<tr>

            <th>ID No/th>
            <th>Experience Details</th>
            <th>Awards</th>
            <th>Ability</th>
            
    </tr>';

    while($row = $result->fetch_assoc())
   {
       //echo 'name : ' . $row['fname'].' / last name ' .$row['lname'].' /  phone ' .$row['phone'];
           //echo '</br>';

           echo '<tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['exp'].'</td>    
                    <td>'.$row['aw'].'</td>
                    <td>'.$row['ab'].'</td>  
                   
                              
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