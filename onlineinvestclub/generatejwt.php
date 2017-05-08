<?php
ob_start();
passthru('/usr/bin/python2.7 /var/www/html/projects/php_investmentclub/onlineinvestment/generatejwt.py 123456 amitambekar');
$output = ob_get_clean();
echo $output;
?>