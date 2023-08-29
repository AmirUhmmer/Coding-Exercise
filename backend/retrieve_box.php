<?php
include("db_connection.php");
class update_db extends db_connect{
    public function retrieve_box($box_id){
        $con = $this->connect();

        $retrieved = 0;

        $sql_query = $con->prepare("UPDATE user_info SET package_state=? WHERE id='$box_id'");
        
        $sql_query->bind_param("i", $retrieved);

        $sql_query->execute();

        $sql_query->close();

        header("Location: ../index.php");
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

$box_id = $_POST['record_id'];

$update_db = new update_db();
$update_db->retrieve_box($box_id);
}

