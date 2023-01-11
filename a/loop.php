
<?php
$colors=[
    "red","orange","pink","purple"
];
$box=[
"student"=>"ali",
"doctor"=>"sarah",
"engineer"=>"sana"
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">php lectures</a>

     
  </div>
</nav>
<div class="container">
<div class="row">
    <div class="col-lg-12 text-center">
        <h1 class="mt-5">FOR EACH, WHILE AND FOR LOOPS</h1>

    </div>
</div>


<div class="row">
<table class="table table-striped m-5">
<?php
// -------------FOREACH LOOP ------------

foreach($colors as $c){
   echo "<tr><td> $c</tr></td>";
}
foreach($box as $c=>$a){
   echo "<tr><td>$c<td> $a</tr></td>";
}
// ------------------FOR LOOP------------------

for($i=0;$i<count($colors);$i++){
    $a=$colors[$i];
    echo "<tr><td> $a</tr></td>";
}
// <!-- -------------WHILE LOOP--------------------  --> 

$j=0;
while($j<count($colors)){
    $a=$colors[$j];
    echo "<tr><td>$a</tr></td>";
    $j++;
}
?>



</table>
</div>
</div> 
</body>
</html>