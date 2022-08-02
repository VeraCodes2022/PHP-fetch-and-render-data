<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
            margin:auto;
            width:960px;
        }
        th,td{
            border:1px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
<?php
require './conn.php';
$read=mysqli_query($link,'select * from sales');
$list=mysqli_fetch_all($read,MYSQLI_ASSOC);

// destroy the result 
mysqli_free_result($read);
// close link 
mysqli_close($link);


?>
    <table>
        <th>ID</th> <th>NAME</th> <th>BRAND</th><th>PRICE EURO</th><th>PRODUCTION LOCATION</th>
        <?php foreach ($list as $row): ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['brand']?></td>
            <td><?php echo $row['price_euro']?></td>
            <td><?php echo $row['produc_add']?></td>
        </tr>
        <?php 
        endforeach;
         ?>
    </table>
</body>
</html>
