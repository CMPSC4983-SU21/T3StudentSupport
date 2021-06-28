<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname=""; /* have to put data base name */

/*connect to database*/
if(!$con= mysqli_connect($dbhost,$dbuser, $dbpass,$dbname))
{
  die("It failed to connect!"); /*if we get error */
}
