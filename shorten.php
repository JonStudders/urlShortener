<?php

/*
 * url is passed through from form
 * generate random string based on randomInt
 * check if string exists already
 * if exists, regenerate string
 * else add to database and display new url to user
 */

function shortenURL($mysqli, $longURL) {
    if (mysqli_connect_errno()) {   //  Checking connection
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $result = $mysqli->query("SELECT * FROM shortenedurls WHERE longUrl = '$longURL'"); // Checks if longurl is already in database
    if (mysqli_num_rows($result) > 0) {
        $result = $result->fetch_assoc();
        echo "<p>This URL already exists in our database</p>";
        echo "<p>The path value is: " . $result["shortenedUrl"];
        echo "<p>The shortened url is: " .  createShortUrl($result["shortenedUrl"]);
    } else {
        $shortenedUrl = bin2hex(random_bytes(5));
        $sql = "INSERT INTO shortenedurls (longUrl, shortenedUrl) VALUES ('$longURL','$shortenedUrl')";
        if ($mysqli->query($sql) === TRUE) {
            echo "Shortened URL added to database <br>";
            echo "You're shortened URL is: " . createShortUrl($shortenedUrl);
        } else {
            echo "Error: " . $sql . "<br>"  . $mysqli->error;
        }
    }

}

function createShortUrl($path) {
    //  http://localhost:63342/urlShortener/unshorten.php?path=value8
    $shortenedUrl = "http://" .  $_SERVER['HTTP_HOST'] . "/unshorten.php?path=" . $path;
    return $shortenedUrl;
}

?>