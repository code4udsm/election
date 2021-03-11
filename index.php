<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="/pages/flow_control.js"></script>
    <link rel="stylesheet" href="styles/styles.css">

    <title> Welcome </title>




</head>


<body>

<div id="roleSelectionTable">

    <table border="2.0" >
        <thead> </thead>
        <caption>  <h1 class="heading"> Select your role </h1></caption>
        <tbody>
        <tr>
            <td><p id="voter"> <a href="pages/voter.php"> I am a voter </a> </p> </td>
            <td> <p id="voter"> <a href="pages/observer.php"> I am an observer </a> </p></td> </tr>

        <tr>
            <td> <p id="ec"> <a href="pages/ec.php" > Electoral Committee </a> </p></td>
            <td>    <p id="dos"> <a href="pages/dos.php" > Dean of Students </a> </p></td>
        </tr>
        </tbody>
    </table>
    <p> <a href=""> Having issues? </a> </p>
</div>

<hr>

<div id="footer">
    <?php
    include_once 'footer.php';

    ?>

</div>

</body>

</html>



