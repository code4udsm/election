<!DOCTYPE html>
<html>
<head>
    <script type=”text/javascript” src=”https://ajax.googleapis.
            com/ajax/libs/jquery/1.8.3/jquery.min.js”></script>
    <script type="text/javascript" src="flow_control.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <title> Register to vote </title>
</head>

<body>

<p id="home"> <a href="../index.php" > Home</a> </p>


<form id="form" name="voterRegistrationForm" action="/pages/voter.php"
      onsubmit="" method="post" >

    <div id="errorDiv">

    <?php
if (isset($_SESSION['error']) && isset($_SESSION['formAttempt'])) {
unset($_SESSION['formAttempt']);
print "Errors encountered<br />\n";
foreach ($_SESSION['error'] as $error) {
print $error . "<br />\n";
} //end foreach
} //end if

?>
    </div>

    <table>
        <caption>  <h1 class="heading"> Voter Registration </h1>
            <br>  sections marked with <sup class="asterisk">*</sup> are required <br> </caption>
        <tbody>

        <tr> <td> <strong> Student Registration Number <sup class="asterisk">*</sup>: </strong> </td>
            <td><label>
                    <input class="field" type="tel" name="student_registration_number" >
                </label></td> </tr>

        <tr>  <td> <strong> Sex <sup class="asterisk">*</sup> : </strong> </td>
            <td><label>
                    <input class="field" type="radio" name="gender" value="male" >
                </label> <strong> Male </strong>
                <label>
                    <input class="field" type="radio" name="gender" value="female" >
                </label> <strong> Female </strong></td> </tr>


        <tr> <td> <strong> Type your password <sup class="asterisk">*</sup>: </strong> </td>
            <td> <label>
                    <input class="field" type="password" name="password" >
                </label> </td> </tr>

        <tr> <td> <strong>Retype your password<sup class="asterisk">*</sup>: </strong> </td>
            <td><label>
                    <input class="field" type="password" name="password1">
                </label></td> </tr>




        <tr> <td> <strong> Ready? </strong> </td>
            <td> <input class="field" type="submit" <?php $name="submit" ?> value=" Register to vote"> </td> </tr>

        <tr> <td> <strong> Having issues? </strong> </td>
            <td> <input class="field" type="reset" name="reset" value="Talk to us"> </td> </tr>

        </tbody>
    </table>

    <p> <strong> <br> <br> Registered previously? <a href=""> Sign in here </a> </strong></p>

</form>

<hr>
<div style="text-align: center;">
    <footer>
        <?php include_once '../footer.php' ?>

    </footer>

</div>

<?php


function registerVoter(){
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
}

?>
</body>
</html>







