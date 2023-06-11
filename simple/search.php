<?php

   include 'config.php';

   $sql ="select * from sign";
   $result = $connection -> query($sql);

   if($result->num_rows > 0)
   {
    echo '<table border = 1>';
        echo '<tr>

                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone</th>
        </tr>';

        while($row = $result->fetch_assoc())
       {
           //echo 'name : ' . $row['fname'].' / last name ' .$row['lname'].' /  phone ' .$row['phone'];
           //echo '</br>';

           echo '<tr>
                    <td>'.$row['fname'].'</td>
                    <td>'.$row['uname'].'</td>    
                    <td>'.$row['mail'].'</td>         
           </tr>';
       }

    echo'</table>';

       
   }
   else{
       echo 'empty table';
   }
   
?>