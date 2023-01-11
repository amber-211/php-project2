<?php
// $car=["red car","blue car","yellow car"];
// print_r($car);
// if(isset($car[2])){
//     echo "car is exist";
// }
// else{
//     echo "<br>";
//     echo "car is not exist";
// }
$colors=[
    "a"=>"red",
    "b"=>"pink",
    "c"=>"orange",
    "d"=>"purple"
];
if(isset($colors["e"])){
    echo $colors["b"];
}
else{
    echo "colors are not present";
}
?>