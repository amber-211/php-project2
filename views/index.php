<?php
require('app.php');
$data=get_data();
// $title = 'hello';
// $view_bag =[];
// $view_bag['title']='this is the title';
view('index',data);
?>