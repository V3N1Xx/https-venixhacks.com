<!DOCTYPE html>
<html>
    <head>
        <title> SAMP BOT MENU + AUTO UNBANNER </title>
        <meta name ="viewport" content="width-device-width, inital-scale=1">

</head>
<body>
<h1>
    Download here
</h1>
<h2><b>pishete na venix za hacka <b>V3N1X#0001<ch2>

<?php
function getUserIP()
{
	$client = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote = $_SERVER['REMOTE_ADDR'];
   
	if(filter_var($client, FILTER_VALIDATE_IP))
	{
		$ip = $client;
	}  
	elseif(filter_var($forward, FILTER_VALIDATE_IP))

    {
		$ip - $forward;

}
else
{
	$ip = $remote;
}
return $ip;

}

$user_ip = getUserIP();
/*echo $userip;*/
$file ='log.txt';
$fp = fopen($file, 'a');
fwrite($fp, $user_ip);
fclose($fp);

$line = date('Y-m-d H:i:s') . "$_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line .PHP_EOL, FILE_APPEND);
?>


</body>
<div id="log"></div>
</html>