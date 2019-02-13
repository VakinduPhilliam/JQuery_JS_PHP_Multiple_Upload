<?php
    $images_arr = array();
    foreach($_FILES['images']['name'] as $key=>$val){
        //display images without stored
        $extra_info = getimagesize($_FILES['images']['tmp_name'][$key]);
        $images_arr[] = "data:" . $extra_info["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name'][$key]));
    }
?>