<?php

$str = "%";
echo $str;
echo '<br>';
$str = "一分鐘內單量減少12％
，單量差距XXX";
echo urlencode($str);
$str1 = $str;
echo '<br>';
echo urldecode($str1);
