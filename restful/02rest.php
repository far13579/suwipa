
<?php
    include_once("01dbcontrol.php");
    include_once("util.php");
    $debug_mode = false;
    
    if($_SERVER['REQUEST_METHOD'] == 'GET'){ # select
        debug_text("for GET Method" ,$debug_mode); 
        show_data($debug_mode);
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){ # insert , update , delete
        debug_text("for POST Method", $debug_mode);
    }else{
        debug_text("Error Unknow this Request" ,$debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("sucubus","","sec2",$debug_mode);
        echo json_encode($mydb->query("SELECT * FROM customer"));
        $mydb->close();
        
    }
?>