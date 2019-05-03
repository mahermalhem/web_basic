<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php 
print("hello world <br>");


$array=array('jordan','itally','baris','amman','tokyo','armenia');

echo "Unsorted array is: ";
echo "<br />";
print_r($array);
for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "Sorted Array is: ";
echo "<br />";
print_r($array);


?>



</body>
</html>