<?php
    include 'config.php';
    include 'upper.php';
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
    table 
    {
        border-collapse: collapse;
        width: 100%;
        color: #eb4034;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }

    th
    {
        background-color: #eb4034;
        color: white;
    }

    tr:nth-child(even) {background-color: #ededed}

    body
    {
        background-color:whitesmoke;
    }
    input
    {
        width:30%;
        height:5%;
        border:2px;
        border-radius:05px;
        padding:8px 15px 8px 15px;
        margin:10px 0px 15px 0px;
        box-shadow:1px 1px 2px 1px grey;
        font-size: 25px;
}
  </style>
</head>

<body>
    <form action="searchbykey.php" method="post">
</br>
        <input type="text" name="key" placeholder="Enter value" 
            style=
            "width:30%;
             height:10%;
             border:2px;
             border-radius:05px;
             padding:8px 15px 8px 15px;
             margin:10px 0px 15px 0px;
             box-shadow:1px 1px 2px 1px grey;
             font-size: 25px;
             ">
        <input type="submit" value="Search by name"
        style=
            "width:30%;
             height:10%;
             border:2px;
             border-radius:05px;
             padding:8px 15px 8px 15px;
             margin:10px 0px 15px 0px;
             box-shadow:1px 1px 2px 1px grey;
             font-size: 25px;
             "
        >
        <br>
        <br>
    </form>
</body>
 </html>

<form method="post" action="insert.php">

<input type="text" name="Inserid" placeholder="Enter ID"><br>
<input type="text" name="Experience" placeholder="Enter Experience"><br>
<input type="text" name="Awards" placeholder="Enter Awards"><br>
<input type="text" name="Abilities" placeholder="Enter Abilities"><br>
<input type="submit" value="Submit">
</form>


 <?php
    include 'nav.php';
?>

</body>
</html>
</body>
</html>