# Captcha-Solver
This is a PHP based captcha solver, that can solve captchas automatically.

# Initialization:
Uncomment the line 154 of hasherv2.php to build hash strings for letters. This needs some sample captcha images.
Use hasherv2.php and build letterlist (array or database, whichever convenient) to store all known letter pattern hash strings.

# Using:
Use solver.php to download captcha image as captcha.jpg  
The result is now available on the text file "res.txt"
See the [Example Module] to see the sample images.
