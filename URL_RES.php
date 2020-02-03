<?php
$url = 'https://www.google.com';

print_r(get_headers($url));

print_r(get_headers($url, 1));
?>