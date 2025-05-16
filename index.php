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
    array("name" => "isreal", "Age" => 22, "salary" => 22000 ),
    array("name" => "shalini", "Age" => 21, "salary" =>20000 ),
);  

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        echo "$key => $value\n";
    }
    echo "\n";
}

?>


<table style="width: 100%">
    
    <tr>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
         <th>name</th>
        <th>age</th>
        <th>salary</th>
         <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <tr>
        <td>Ajay</td>
        <td>25</td>
        <td>20000</td>
         <td>Amit</td>
        <td>28</td>
        <td>25000</td>
         <td>Sunny</td>
        <td>25</td>
        <td>23000</td>
        <td>Radha</td>
        <td>27</td>
        <td>27000</td>
         <td>Nikhil</td>
        <td>26</td>
        <td>24000</td>
         <td>Isreal</td>
        <td>22</td>
        <td>22000</td>
         <td>shalini</td>
        <td>21</td>
        <td>21000</td> 
    </tr>
</table>
</body>
</html>