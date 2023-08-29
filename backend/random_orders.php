<?php

class pending_customers {

    public function display_pending_customers(){

        //random name
        $first_names = array("John", "Gabriela", "Mae", "Jose", "Christian", "James", "Janella");
        $last_names = array("Rizal", "Bonifacio", "Santiago", "de la Cruz", "Guanzon", "Reyes");

        $random_first_name = $first_names[array_rand($first_names)];
        $random_last_name = $last_names[array_rand($last_names)];

        //random number
        $phone_number = "+639 ";

        for ($i = 0; $i < 7; $i++) {
            $phone_number .= rand(0, 9);
        }

        //package size
        $package_sizes = array("Small box", "Medium box", "Large box");

        $random_package_size = $package_sizes[array_rand($package_sizes)];

        echo "<tr>
                <td>".$random_first_name."</td>
                <td>".$random_last_name."</td>
                <td>".$phone_number."</td>
                <td>".$random_package_size."</td>
              </tr>";
    }
}