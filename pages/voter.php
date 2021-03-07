<?php



require_once 'db.php';

$query = "SELECT student_registration_number from voters WHERE student_registration_number='$_POST[studentRegistrationNumber]'";


if (!empty($connection)) {
    $result= pg_query($connection, $query);
}

if(!empty($result)){

    $row = pg_num_rows($result);
}

if( !empty($row) && $row>=1){
    echo "<p id=\"content\"> Hmm!<br> You are already registered.<br>"
        . "Please "
        . "<br> <a href=\"plaintiffSign-in.php\"> Sign in here</a></p>";
}

else{



// insert voter information into 'voters' table
$sql = "INSERT INTO voters (voter_id, student_registration_number, sex, password, password1, registrationtime)
        VALUES ('".$_POST['studentRegistrationNumber']."', 
        '".$_POST['gender']."','".$_POST['password']."', '".$_POST['password1']."')";

if (!empty($connection) && $connection->query($sql) === TRUE) {
  echo " <p id=\"content\" > Congratulations! <br>"
    . "You are successfully registered.<br> "
    ." Click here <a href=\"dos.php.php\" > Log in</a> to log in</p> ";
}
else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}

}

$connection->close();



