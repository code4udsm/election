<!DOCTYPE html>
<html>
<head>
    <script type=”text/javascript” src=”https://ajax.googleapis.
            com/ajax/libs/jquery/1.8.3/jquery.min.js”></script>

    <script type="text/javascript" src="flow_control.js"></script>
    <script type="text/javascript" src="form.js"></script>

    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <title> Register to vote </title>
</head>

<body>

<p id="home"> <a href="../index.php" > Home</a> </p>


<form id="voter_registration_form" name="voter_registration_form" action="voter_processing.php"
      onsubmit="" method="POST" >

    <div id="errorDiv">


    </div>

    <fieldset>

    <table>
        <caption>
            <h1 class="heading"> Voter Registration </h1>
            <br>  sections marked with <sup class="asterisk">*</sup> are required <br>
        </caption>


        <!--beginning of table body -->
        <tbody>

        <tr>
            <td> <label for="student_registration_number">
                    <strong> Student Registration Number <sup class="asterisk">*</sup>: </strong>
                </label>

             </td>

            <td>
                <input class="field" type="text" name="student_registration_number" id="student_registration_number">

                <span class="errorFeedback errorSpan"
                      id="nameError" > Registration number is required
                </span>

                <span class="errorFeedback errorSpan"
                      id="phoneError">Format: xxxx-xx-xxxx</span>

            </td>
        </tr> <!-- end of student registration number row-->


        <!-- start of voter gender row-->
        <tr>
            <td>
                <label for="gender"> <strong> Sex <sup class="asterisk">*</sup> : </strong> </label>
            </td>

            <td>
                <input class="field" type="radio" name="gender" id="gender" value="male" > <strong> Male </strong>

                <input class="field" type="radio" name="gender" id="gender" value="female" > <strong> Female </strong>

                <span class="errorFeedback errorSpan
                      phoneTypeError" id="gendertypeError">Please choose an option</span>
            </td>
        </tr>  <!-- end of voter gender row-->


        <!-- start of voter password row-->
        <tr>
            <td>
                <label for="password">
                    <strong> Type your password <sup class="asterisk">*</sup>: </strong>
                </label>
            </td>

            <td>
                <input class="field" type="password" name="password" id="password">
                <span class="errorFeedback errorSpan"
                      id="password1Error"> Password required </span>
            </td>

        </tr> <!-- end of voter password row-->


        <!-- start of voter confirmation password row-->
        <tr>
            <td>
                <label for="password1">
                    <strong>
                        Retype your password <sup class="asterisk"> * </sup>:
                    </strong>

                </label>
            </td>

            <td>
                <input class="field" type="password" name="password1" id="password1">
                <span class="errorFeedback errorSpan"
                      id="password2Error"> Passwords don’t match </span>

            </td>

        </tr> <!-- end of voter confirmation password row -->




        <tr>
            <td> <label for="submit">
                    <strong> Ready? </strong>
                </label>

            </td>

            <td>
                <input class="field" type="submit" name="submit" id="submit" value=" Register to vote">
            </td>
        </tr>

        <tr>
            <td>
                <strong> Having issues? </strong>
            </td>

            <td>
                <a href="contacts.php" > Talk to us </a>
            </td>
        </tr>

        </tbody>
    </table>

    </fieldset>

    <p> <strong> <br> <br> Registered previously? <a href=""> Sign in here </a> </strong></p>

</form>


<hr>
<div style="text-align: center;">
    <footer>
        <?php include_once '../footer.php' ?>

    </footer>

</div>


</body>
</html>







