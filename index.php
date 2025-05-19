<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
     <title>Total Yes Eligible</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="./style.css">

</head>

<body>

    


<?php

$students = array(
    array("name" => "Ajay", "Age" => 25, "salary" => 20000),
    array("name" => "Amit", "Age" => 0, "salary" => 25000 ),
    array("name" => "Sunny", "Age" => 14, "salary" => 23000 ),
    array("name" => "Radha", "Age" => 27, "salary" => 27000),
    array("name" => "Nikhil", "Age" => 15, "salary" => 24000 ),
    array("name" => "Isreal", "Age" => 22, "salary" => 22000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 5, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
    array("name" => "shalini", "Age" => 17, "salary" =>20000 ),
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
    $yesCount = 0;
    $noCount = 0;

 
     foreach ($students as  $i=> $s) { 
         $a=$a+$s['Age'];
         $salary=$salary+$s['salary'];?>
       
    <tr class="<?php echo ($s['Age']>18)?'highlight-green':'highlight-red';?>" >
     
        <td><?php  echo $s['name']; ?></td>
        <td><?php  echo $s['Age']; ?></td>
        <td><?php  echo $s['salary']; ?></td>
        <td><?php  
         if ($s['Age'] >= 18) {
        echo  "yes";
    } else {
        echo "No ";
    }
            ?>
        </td>
<?php
                if ($s['Age'] >= 18) {
                   
                    $yesCount++;
                } else {
                   
                    $noCount++;
                }
                ?>          
 
</tr>
<?php }?>


<tr>
    <td><?php echo $i+1?></td>
    <td><?php echo $a/count($students);?></td>
    <td><?php echo $salary/count($students);?></td>
    <td>

   
    
                <p style=color:blue>Total yes Eligible (yes):<?php echo $yesCount ?></p>    
                <p style=color:blue>Total Not Eligible (No):<?php echo $noCount ?></p></td>
    
</tr>
   
</table>
</body>
</html> 