<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/styles.css" >
    <title> Vote:Dean of Students </title>



</head>


<body>
<p id="home"> <a href="../index.php" > Home </a> </p>
    <div>

         <form id="form" name="dosLoginForm" action="/pages/voter.php"
              onsubmit="" method="post" >

            <table>
                <caption>  <h1 class="heading"> Dean of Students Login Form </h1>
                    <br> <br> sections marked with <sup class="asterisk">*</sup> are required </caption>
                <tbody>

                <tr> <td> <b> Administration Number <sup class="asterisk">*</sup>: </b> </td>
                    <td><label>
                            <input class="field" type="text" name="adminNumber" >
                        </label></td> </tr>

                <tr> <td> <b> Password<sup class="asterisk">*</sup>: </b> </td>
                    <td><label>
                            <input class="field" type="password" name="password" >
                        </label></td> </tr>



                <tr> <td> <b> You are all set </b> </td>
                    <td> <input class="field" type="submit" name="submit" value="Sign in"> </td> </tr>

                <tr> <td> <b> Filled in incorrect details? </b> </td>
                    <td> <input class="field" type="reset" name="reset" value="Reset"> </td> </tr>

                </tbody>
            </table>
        </form>


<hr>
<div style="text-align: center;">
    <footer>
        <?php include_once '../footer.php' ?>

    </footer>

</div>
</body>
</html>



   




