<!DOCTYPE html>
<html lang="en">



<?php


require_once 'db.php';
$query = "SELECT studentRegistrationNumber from Voters WHERE studentRegistrationNumber='$_POST[studentRegistrationNumber]'";


if (!empty($connection)) {
    $result= mysqli_query($connection, $query);
}
if(!empty($result))
{$row = mysqli_num_rows($result);}
if( !empty($row) && $row>=1){
    echo "<p id=\"content\"> Hmm!<br> You are already registered.<br>"
        . "Please "
        . "<br> <a href=\"plaintiffSign-in.php\"> Sign in here</a></p>";
}

else{



// insert prosecutor information into 'plaintiff' table
$sql = "INSERT INTO Voters (studentRegistrationNumber, password, password1,gender)
        VALUES ('".$_POST['studentRegistrationNumber']."', '".$_POST['password']."','".$_POST['password1']."', '".$_POST['gender']."')";

if (!empty($connection) && $connection->query($sql) === TRUE) {
  echo " <p id=\"content\" > Congratulations! <br>"
    . "You are successfully registered.<br> "
    ." Click here <a href=\"plaintiffSign-in.php\" > Log in</a> to log in</p> ";
}
else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}


$connection->close();
}
?>

</html>
