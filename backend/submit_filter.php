<?php   
session_start();
include ("storage_data.php");
include ("insert_db.php");
class filter_input extends storage_data{
    public function check_storage($first_name, $last_name, $phone_number, $package_size){
        $available_small_storage = $this->get_small_storage_data();
        $available_medium_storage = $this->get_medium_storage_data();
        $available_large_storage = $this->get_large_storage_data();

        //set errors if there are no available storage for the box
        if($available_small_storage == 0 && $package_size == "Small box"){
            $_SESSION['error'] = "no available storage for small boxes";
        }
        elseif($available_medium_storage == 0 && $package_size == "Medium box"){
            $_SESSION['error'] = "no available storage for medium boxes";
        }
        elseif($available_large_storage == 0 && $package_size == "Large box"){
            $_SESSION['error'] = "no available storage for large boxes";
        }
        else{
            //if there are still storage available, add it to db
            $_SESSION['error'] = '';
            $add_db = new storage_manage;
            $add_db->storage_add($first_name, $last_name, $phone_number, $package_size);
        }

        header("Location: ../index.php");
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){


	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $package_size = $_POST['package_size'];

    //check if there are still availble storage for the box
    $filter_input = new filter_input();
    $filter_input->check_storage($first_name, $last_name, $phone_number, $package_size);
    
}