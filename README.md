# urlShortener

Creates a shortned URL based on url 'GET' value.
This is by no means secure and very susceptible to SQL Injection.

Requirements:

MYSQL Server - database: urls, table: shortenedurls and the followingn colums.

id Primary int(10) UNSIGNED AUTO_INCREMENT	

longUrl	varchar(255)	utf8_general_ci

shortenedUrl	varchar(10)	utf8_general_ci

uses	int(10)	

PHP 7.3
