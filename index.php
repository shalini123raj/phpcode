<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:2px solid black;
  border-collapse: collapse;

}
th, td{
    padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
th{
    text-align: left;
}
  
}
</style>
<body>
 <h2> HTML table</h2>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$students = array(
    array("name" => "Ajay", "Age" => 25, "salary" => 20000),
    array("name" => "Amit", "Age" => 28, "salary" => 25000 ),
    array("name" => "Sunny", "Age" => 25, "salary" => 23000 ),
    array("name" => "Radha", "Age" => 27, "salary" => 27000),
    array("name" => "Nikhil", "Age" => 26, "salary" => 24000 ),
    array("name" => "Isreal", "Age" => 22, "salary" => 22000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
);  


?>


<table style="width: 100%">
    
    <tr>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>Elg.Vote</th>
       
        
    </tr>
    <?php 
    $a=0;
    $salary=0;
     foreach ($students as  $i=> $s) { 
         $a=$a+$s['Age'];
          $salary=$salary+$s['salary'];?>
    <tr>
        <td><?php  echo $s['name']; ?></td>
        <td><?php  echo $s['Age']; ?></td>
        <td><?php  echo $s['salary']; ?></td>
        <td><?php  echo "yes/no"; ?></td>
        
</tr>
<?php }?>


<tr>
    <td></td>
    <td><?php echo $a/count($students);?></td>
    <td><?php echo $salary;?></td>
    <td></td>
</tr>

 


<?php

function calculateAverage($array) {
    $sum = 0;
    $count = 0;
    foreach ($array as $value) {
        $sum += $value;
        $count++;
    }
    return $sum / $count;
}


?>

   
</table>
</body>
</html> 