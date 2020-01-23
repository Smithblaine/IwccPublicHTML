<?php

  echo ('HostName: ' . gethostname());

$hostname = $_SERVER['REMOTE_ADDR'];

echo ('<br />Internet host name: ' . $hostname);
date_default_timezone_set('UTC');
$offset=5*60*60;; //converting 4 hours to seconds.
  $dateFormat="l, n-j-y, g:i a"; //set the date format
  $timeNdate=gmdate($dateFormat, time()-$offset); 

echo('<br />Date : ' . $timeNdate);

echo ("<script>var now = new Date();</script>");
?>

