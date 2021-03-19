
<?php
include_once("01dbcontrol.php");
include_once("util.php");
$debug_mode = false;
if ($_SERVER['REQUEST_METHOD'] == 'GET') { # select
    echo json_encode(show_data($debug_mode));
    show_data($debug_mode);
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') { # insert , update , delete
    debug_text("POST may be support next time <br>", $debug_mode);
    if (isset($_POST['u_id']) && isset($_POST['u_name'])) {
        $u_id = $_POST['u_id'];
        $u_name = $_POST['u_name'];
        insert_newdata($u_id, $u_name, $debug_mode);
    }
    // $message = '{"Status":'+print_r($_POST)+'}';
    // echo json_encode($message);
} else {
    http_response_code(405);
}
function show_data($debug_mode)
{
    $mydb = new db("root", "", "sec2", $debug_mode);
    $data = $mydb->query("select * from user");
    return $data;
    // $mydb->close();
}
function insert_newdata($u_id, $u_name, $debug_mode)
{
    $mydb = new db("root", "", "sec2", $debug_mode);
    $data = $mydb->query("instert.....");
    show_data($debug_mode);
    return $data;
}
?>