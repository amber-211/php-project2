<?php
function get_data(){
    $fname = CONFIG['data_file'];
    $json ='';
    if(!file_exist($fname)){
        // $handle = fopen($fname, 'w+');
        // fclose($handle);
        file_put_contents($fname,'');
    }
    else{
        // $handle - fopen($fname, 'r');
        // $json =fread($handle, filesize($name));
        // fclose($handle);
        $json=file_get_contents($fname);
    }
    return $json;
}


function view($name , $model){
    // global $title;
     global $view_bag;
    require('layout.view.php');
}

?>