<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="/pages/flow_control.js"></script>
    <link rel="stylesheet" href="styles/styles.css">

    <title> Welcome </title>




</head>


<body>
<p id="ec"> <a href="pages/ec.php" > Electoral Committee </a> </p>

    <p id="dos"> <a href="pages/dos.php" > Dean of Students </a> </p>






        <form id="form" name="voterRegistrationForm" action="/pages/voter.php"
              onsubmit="" method="post" >

            <table>
                <caption>  <h1 class="heading"> Voter Registration </h1>
                    <br>  sections marked with <sup class="asterisk">*</sup> are required <br> </caption>
                <tbody>

                <tr> <td> <strong> Student Registration Number <sup class="asterisk">*</sup>: </strong> </td>
                    <td><label>
                            <input class="field" type="tel" name="studentRegistrationNumber" >
                        </label></td> </tr>

                <tr>  <td> <strong> Sex <sup class="asterisk">*</sup> : </strong> </td>
                    <td><label>
                            <input class="field" type="radio" name="gender" value="male" >
                        </label> <strong> Male </strong>
                        <label>
                            <input class="field" type="radio" name="gender" value="female" >
                        </label> <strong> Female </strong></td> </tr>


                <tr> <td> <strong> Password<sup class="asterisk">*</sup>: </strong> </td>
                    <td> <label>
                            <input class="field" type="password" name="password" >
                        </label> </td> </tr>

                <tr> <td> <strong>Re-Enter Password<sup class="asterisk">*</sup>: </strong> </td>
                    <td><label>
                            <input class="field" type="password" name="password1">
                        </label></td> </tr>




                <tr> <td> <strong> Ready? </strong> </td>
                    <td> <input class="field" type="submit" name="submit" value=" Register to vote"> </td> </tr>

                <tr> <td> <strong> Filled in incorrect details? </strong> </td>
                    <td> <input class="field" type="reset" name="reset" value="Reset"> </td> </tr>

                </tbody>
            </table>

            <p> <strong> <br> <br> Registered previously? <a href=""> Sign in here </a> </strong></p>

        </form>


<hr>

<div id="footer">
    <?php
    include_once 'footer.php';

    ?>

</div>

</body>

</html>



