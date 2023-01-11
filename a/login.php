<?php
include 'nav.php';
// include 'config.php';
// include 'functions.php';
// include 'admin.php';

$_POST['email'];
$_POST['password'];
if($_SERVER['REQUEST_METHOD']=='POST'){
   echo $_POST['email'];
    echo "<br>";
    echo $_POST['password'];// echo $_POST['email'];
    // echo "<br>";
    // echo $_POST['password'];
    // output($_POST);
}
if(isset($_POST['submit'])){
   print_r ($_POST);
}

// for validation 

if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    if($email==false){
        $status='please enter a valid email address';
    }
}
// compare with data store  

// if(authenticate_user($email,$password)){
//     $_SESSION['email']=$email;
//     redirect('admin.php');
//     die();
// }
// else{
//     $status="the provided credential did n't work";

// }

?>
<div class="container mt-5">
<form action="" method="post">
  
    <div class="form-group">
        <label for="email">email</label>
        <input type="text"  class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password"  class="form-control" name="password" id="password">
    </div>

    <div class="form-group mt-5 mr-5">
        <label for="submit">submit</label>
        <input type="submit" class="form-control" name="submit" id="submit">
    </div>





</form>
<div class="row">
    <?php
if(isset($status)){
    echo $status;
}
    ?>
</div>
</div>
