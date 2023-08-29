<?php

class storage_manage extends db_connect{
    public function storage_add($first_name, $last_name, $phone_number, $package_size){
        $con = $this->connect();
        
        $sql = $con->prepare("INSERT INTO user_info (first_name, last_name, phone_number, package_size) VALUES (?, ?, ?, ?)");

        $sql->bind_param("ssss", $first_name, $last_name, $phone_number, $package_size);

        if ($sql->execute()) {
            // insert success
            header("Location: ../index.php");
        } else {
            // There was an error
            $_SESSION['error'] = "Error: " . $sql->error;
            header("Location: ../index.php");
        }
          
        $sql->close();
    }
}