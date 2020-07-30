//The Art of Redirecting
/*
Suppose you originally had a page called /aboutUs.php, but decided to rename it to /about.php. Simple: you rename the file, and you're done! Unfortunately, a lot of other sites are still linking to /aboutUs.php, and any user clicking those links are getting an error.

So, you decide to re-create aboutUs.php, and just make it redirect to /about.php.
Your Mission

    Fill in the logic needed in aboutUs.php to make it redirect to /about.php.
*/
<?php
// this is extra credit: a 301 redirect is good for search engines in this case!
http_response_code(301);

header('Location: /about.php');
