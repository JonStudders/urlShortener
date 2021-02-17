<?php
/*
 *
 *
 *  SQL STRUCTURE
 *
 *  Database: urls
 *      Table : shortenedurls
 *      -   id ( int -- 11 )
 *      -   longUrl ( varchar -- 255 )
 *      -   shortenedUrl ( char -- 15 )
 *      -   uses ( int -- 10 )
*/

//  mySQL config
$DB_HOST = '127.0.0.1';
$DB_NAME = 'urls';
$DB_USER = 'root';
$DB_PASS = 'root';
$DB_PORT = 8889;

// Initialising connection to Database
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);
if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}

?>