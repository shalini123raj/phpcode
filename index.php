<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// function printReverseNums($n) {
//     for ($i = $n; $i >= 1; $i--) {
//         echo $i . " ";
//     }
// }

// printReverseNums(10);


function printReverseNums($n) {
    $i = $n;
    while ($i >= 1) {
         echo $i . " ";
         $i--;
    }
 }

 printReverseNums(10);

?>

</body>
</html>