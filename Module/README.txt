This is a PHP based captcha solver, that can solve captchas automatically.


Initialization:
Uncomment the line 154 of hasherv2.php to build hash strings for letters.
This needs some sample captcha images.

Use hasherv2.php and build letterlist (array or database, whichever convenient) to store all known letter pattern
hash strings.


Using:
Use solver.php to download captcha image as captcha.jpg  

The result is now available on the text file "res.txt"



Credits:
Andrew Collington, (http://php.amnuts.com/) for the PHP image cropper class.



 	
PHP Captcha Solver  Copyright (C) 2016  Vikrant Sharma
    
 This program comes with ABSOLUTELY NO WARRANTY
    
 This is free software, and you are welcome to redistribute it
    
 under certain conditions. 
