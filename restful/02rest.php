
<?php
    include_once("01dbcontrol.php");
    include_once("util.php");
    $debug_mode = false;
    if($_SERVER['REQUEST_METHOD'] == 'GET'){ # select
        echo json_encode(show_data($debug_mode));
        // debug_text("for GET Method" ,$debug_mode); 
        show_data($debug_mode);
    }else if($_SERVER['REQUEST_METHOD'] == 'POST'){ # insert , update , delete
        debug_text("POST may be support next time <br>",$debug_mode);
        $message = '{"Status":'+print_r($_POST)+'}';
        echo json_encode($message);
        // debug_text("for POST Method", $debug_mode);
    }else{
        // debug_text("Error Unknow this Request" ,$debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root","","sec2",$debug_mode);
        // echo json_encode($mydb->query("SELECT * FROM customer"));
        $data = $mydb->query("select * from user");
        return $data;

        $mydb->close();
        
    }
?>