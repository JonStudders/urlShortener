<?php

/*
 * url is passed through from form
 * generate random string based on randomInt
 * check if string exists already
 * if exists, regenerate string
 * else add to database and display new url to user
 */

function shortenURL($mysqli, $longURL) {
    $decodedLongURL = urldecode($longURL);
    if (mysqli_connect_errno()) {   //  Checking connection
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $result = $mysqli->query("SELECT * FROM shortenedurls WHERE longUrl = '$longURL'"); // Checks if longurl is already in database
    if (mysqli_num_rows($result) > 0) {
        $result = $result->fetch_assoc();
        echo "<p>This URL already exists in our database</p>";
        echo "<p>The path is: " . $result["shortenedUrl"];
        echo "<p>The shortened url is: **function return**";
    } else {
        $shortenedUrl = bin2hex(random_bytes(5));
        $sql = "INSERT INTO shortenedurls (longUrl, shortenedUrl) VALUES ('$longURL','$shortenedUrl')";
        if ($mysqli->query($sql) === TRUE) {
            echo "Shortened URL added to database <br>";
            echo "You're shortened URL is **function return**";
        } else {
            echo "Error: " . $sql . "<br>"  . $mysqli->error;
        }
    }

}

function createShortUrl($path) {
    //  http://localhost:63342/urlShortener/unshorten.php?path=value
    //  http://localhost:63342/urlShortener/unshorten.php?path=5123d828
}

?>