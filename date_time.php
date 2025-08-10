<?php

// set indian timzone
date_default_timezone_set('Asia/Kolkata');

echo date('Y-m-d');
echo "<hr>";

echo date('m/d/Y');
echo "<hr>";


echo date('d/m/Y');
echo "<hr>";


// Example: YYYY-MM-DD HH:MM:SS 24 Hours format
echo date('Y-m-d H:i:s'); 
echo "<hr>";

// Example: YYYY-MM-DD HH:MM:SS 12 Hours format
echo date('Y-m-d h:i:s A'); 
echo "<hr>";

echo "We are see time of ".date_default_timezone_get().' timzone.';
echo "<hr>";