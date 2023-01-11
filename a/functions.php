
<?php
include 'nav.php';
$title='GET Input';
// $product_id=$_GET['productId'];
// $category=23;
// $limit=3;
// $category=filter_input(INPUT_GET,'category',FILTER_VALIDATE_INT);
// $limit=filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);
// if($category==false || $limit==false){
//   die();
// }
// else{
//   echo "value is integer";
// }
// echo 1+3;
// echo "<br>";
// function sum($a,$b){
// echo $a+$b;

// }
// sum(23,56);
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

function authenticate_user($email,$password)
{
  return $email==email && $password==password;
}
function redirect($url)
{
  header('location:$url');
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">GET INPUT</h1>
    </div>

  </div>
  <div class="row">
    <!-- <?= $product_id; ?> -->
  </div>
</div>