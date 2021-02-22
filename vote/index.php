<!DOCTYPE html>
<html lang="en" style="background: brown; text-align: center">

<head>
    <title> Vote </title>

   <link rel="stylesheet" href="styles/styles.css" >

</head>


<body>
<p id="ec"> <a href="pages/ec.php" > Electoral Committee </a> </p>

    <p id="dos"> <a href="pages/dos.php" > Dean of Students </a> </p>


        <h1 class="heading"> Voter registration </h1>



        <form id="form" name="voterRegistrationForm" action=""
              onsubmit="" method="post" style="alignment: center">

            <table>
                <caption> sections marked with <sup class="asterisk">*</sup> are required </caption>
                <tbody>

                <tr> <td> <b> Student Registration Number <sup class="asterisk">*</sup>: </b> </td>
                    <td><label>
                            <input class="field" type="tel" name="studentRegistrationNumber" >
                        </label></td> </tr>

                <tr>  <td> <b> Sex <sup class="asterisk">*</sup> : </b> </td>
                    <td><label>
                            <input class="field" type="radio" name="gender" value="male" >
                        </label> <strong> Male </strong>
                        <label>
                            <input class="field" type="radio" name="gender" value="female" >
                        </label> <strong> Female </strong></td> </tr>


                <tr> <td> <b> Password<sup class="asterisk">*</sup>: </b> </td>
                    <td><label>
                            <input class="field" type="password" name="password" >
                        </label></td> </tr>

                <tr> <td> <b>Re-Enter Password<sup class="asterisk">*</sup>: </b> </td>
                    <td><label>
                            <input class="field" type="password" name="password1">
                        </label></td> </tr>




                <tr> <td> <b> Ready? </b> </td>
                    <td> <input class="field" type="submit" name="submit" value=" Register to vote"> </td> </tr>

                <tr> <td> <b> Filled in incorrect details? </b> </td>
                    <td> <input class="field" type="reset" name="reset" value="Reset"> </td> </tr>

                </tbody>
            </table>
        </form>

<p><b> Registered previously? <a href="">Sign in here</a></b></p>

<hr>
<div style="text-align: center;">
    <?php
    include_once 'footer.php';

    ?>

</div>
</body>
</html>



