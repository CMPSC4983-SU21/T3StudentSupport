<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname=""; /* database name*/

/*connect to database*/
if(!$con= mysqli_connect(/*$dbhost,$dbuser, $dbpass,$dbname*/))
{
  die("It failed to connect!"); /*if we get error */
}
