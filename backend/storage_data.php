<?php
include("db_connection.php");
class storage_data extends db_connect {

    public function get_small_storage_data(){
        //get all the small boxes that are stored.
        $con = $this->connect();
        $small_sql_query = "SELECT * FROM user_info WHERE package_size = 'Small box' AND package_state = '1'";
        $small_query_result = mysqli_query($con,$small_sql_query);
        $available_small_storage = 30 - mysqli_num_rows($small_query_result);
        echo $available_small_storage;
        return $available_small_storage;
    }

    public function get_medium_storage_data(){
        //get all the medium boxes that are stored.
        $con = $this->connect();
        $medium_sql_query = "SELECT * FROM user_info WHERE package_size = 'Medium box' AND package_state = '1'";
        $medium_query_result = mysqli_query($con,$medium_sql_query);
        $available_medium_storage = 20 - mysqli_num_rows($medium_query_result);
        echo $available_medium_storage;
        return $available_medium_storage;
    }

    public function get_large_storage_data(){
        //get all the large boxes that are stored.
        $con = $this->connect();
        $large_sql_query = "SELECT * FROM user_info WHERE package_size = 'Large box' AND package_state = '1'";
        $large_query_result = mysqli_query($con,$large_sql_query);
        $available_large_storage = 10 - mysqli_num_rows($large_query_result);
        echo $available_large_storage;
        return $available_large_storage;
    }

    public function display_boxes_on_storage(){
        //get all the boxes that are stored.
        $con = $this->connect();
        $sql_query = "SELECT * FROM user_info WHERE package_state = '1' ORDER BY package_size DESC";
        $query_result = mysqli_query($con,$sql_query);
        
        if (mysqli_num_rows($query_result) > 0) {
            while($row_data = mysqli_fetch_array($query_result)){
                echo "<tr>
                      <td>".$row_data['first_name']."</td>
                      <td>".$row_data['last_name']."</td>
                      <td>".$row_data['phone_number']."</td>
                      <td>".$row_data['package_size']."</td>
                      <td>
                        <form action='backend/retrieve_box.php' method='POST'>
                        <input type='hidden' name='record_id' value='".$row_data['id']."'>
                        <button type='submit' name='retrieve_button'>Retrieve</button>
                        </form>
                        </td>
                      </tr>
                ";
                //retrieve button integrated in the table
            }
        }
    }

}