<?php
    include_once "01dbcontrol.php";
    include_once "until.php";
    $debug_mode = false;
    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("for GET Method", $debug_mode);
        echo json_encode(show_data($debug_mode));
    }else if(_$SERVER['REQUEST_METHOD']=='POST'){
        debug_text("for POST Method", $debug_mode);
    }else{
        debug_text("Error Unknow this Request", $debug_mode);
        http_response_code(405);
    }
    function show_data(){
        $mydb = new db ("root","","sec2",$debug_mode);
        echo json_encode($mydb->query("select * from customer"));
        $mydb->close();
    }
?>