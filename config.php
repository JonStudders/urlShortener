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

//  Database config
$DB_HOST = 'localhost';
$DB_NAME = 'urls';
$DB_USER = 'root';
$DB_PASS = 'root';

// Initialising connection to Database
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (mysqli_connect_errno()) {   //  Checking connection
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>