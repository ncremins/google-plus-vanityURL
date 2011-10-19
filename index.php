<?php

// Replace your google plus url here.
// To find yours login to Google+ and click your name beside your profile picture,
// the url in your address bar now is your Google+ url.
$gUrl = 'https://plus.google.com/';
header( "HTTP/1.1 301 Moved Permanently" );
header( "Location: " . $gUrl );
exit;

?>