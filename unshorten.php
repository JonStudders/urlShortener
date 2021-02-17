<?php

include 'shorten.php';
require 'config.php';


/*
 * Gets id from url
 * check if exists
 * if exists increment uses and redirect
 * else give error saying not valid
 */

$path = $_GET['path'];
echo $path;
$result = $mysqli->query("SELECT * FROM shortenedurls WHERE shortenedUrl = '$path'");
if (mysqli_num_rows($result) > 0) {
    $result = $result->fetch_assoc();
    header("Location: " . $result["longUrl"]);
}

?>