<?php

require_once 'db.php';

    if(isset($_POST['submit'])){
        $student_registration_number = $_POST['student_registration_number'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $password1 = $_POST['password1'];

        $query = "INSERT INTO voters(student_registration_number, sex, password, password1, registration_time) 
	 values ('$student_registration_number','$gender','$password','$password1',now())";

        if($result = pg_query($query)){
            echo "Congratulations! You Successfully registered to vote.";
        }
        else{

            $ret = pg_query($db,$query);
            if(!$ret){
                echo pg_last_error($db);
            }
        }




    }


?>

