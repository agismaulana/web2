<?php 

function base_url() {
    $get_root_host = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/pertemuan18';
    
    return $get_root_host;
}

?>