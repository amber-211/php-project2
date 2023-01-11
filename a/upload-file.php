<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload" method="POST">
<input type="file" name="image" enctype="multipart/form-data">
<input type="submit" >

    </form>
</body>
</html> -->

<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
 <?php
// if(isset($_FILES['image'])){
//     echo "<pre>";
//     print_r($_FILES);
//     $file_name=$_FILES['image']['name'];
//     $file_size=$_FILES['image']['size'];
//     $file_tmp=$_FILES['image']['tmp_name'];
//     $file_type=$_FILES['image']['type'];
//     move_uploaded_file($file_tmp,"upload/".$file_name);
// }



 