<?php
/*
 *  User enters URL
 *  User gets sent to https://www.website.com/shorten.php?url=**url**
 *  Check if url already in DB
 *  If, return url already
 *  Else, Add to database and give shortened url
 *  Format: https://www.website.com/unshorten.php?id=**shortened**
 *
 */

require 'config.php';
require 'index.html';
?>