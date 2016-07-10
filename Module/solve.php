




<?php

/*

 	PHP Captcha Solver  Copyright (C) 2016 Vikrant Sharma
    This program comes with ABSOLUTELY NO WARRANTY
    This is free software, and you are welcome to redistribute it
    under certain conditions. 

*/


error_reporting(E_ERROR);

$image = grab_page('http://www.imageurl.com/path/to/image.jpg');  //download image
file_put_contents('captcha.jpg', $image);  //put it to captcha.jpg
file_get_contents('hasherv2.php');  //call solver
$cf = file_get_contents('res.txt');    //get result
echo $cf;


               

function grab_page($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}

?>