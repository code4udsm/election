<?php


//Connection to database
$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = vote";
$credentials = " user = code4udsm password = code4udsm";


// Create db
$db = pg_connect("$host $port $dbname $credentials" );

// Check db
if (!$db) {
    echo "Error: unable to connect.";
}
else{
echo "<h1 class=\"heading\" > DARUSO:Welcome to cast your vote. <br> <br> </h1>";}
/*
$sql =<<<EOF
INSERT INTO voters (student_registration_number, sex, password, password1, registrationtime) VALUES ('-0567453','MALE', '24fdd',
        'zcqwr',                                                            now())
EOF;
$ret = pg_query($db,$sql);
if(!$ret){
    echo pg_last_error($db);
}
else{ echo "Record created successfully\n";}
pg_close($db);
*/

