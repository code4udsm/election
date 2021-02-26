<?php


//Connection to database
$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = vote";
$credentials = " user = code4udsm password = code4udsm";


// Create connection
$db = pg_connect("$host $port $dbname $credentials" );

// Check connection
if (!$db) {
    echo "Error: unable to connect.";
}
else{
echo "<h1 class=\"heading\" > DARUSO:Welcome to cast your vote. <br> <br> </h1>";}

$sql =<<<EOF
INSERT INTO voters (studentregistrationnumber, sex, registrationtime) VALUES ('-02633','MALE',now())
EOF;
$ret = pg_query($db,$sql);
if(!$ret){
    echo pg_last_error($db);
}
else{ echo "Record created successfully\n";}
pg_close($db);


