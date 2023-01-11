<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
<input type="name" name="name">
<input type="age" name="age">
<input type="submit" name="submit">
<!-- //jb hum get s data send krte h tw wo url m show hota h lkn jb hum post s data send krte h tw wo url m show nh hota -->
<!-- get , post and request are super global variable  -->
<!-- request ko hum kse k sth bhe use krskte h  -->
<!-- --------------------  -->
 <!-- about $_SERVER   -->
<!-- http connection  -->
    <!-- server information ,host and url info  $_SERVER ko use kr k le skte h -->
    </form>
<?php
if(isset($_POST['submit'])){
    echo $_POST['name']."<br>";
    echo $_POST['age']."<br>";  
    // agr hume same page pr data dikhana h 
}
?>

</body>
</html>