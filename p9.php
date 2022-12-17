<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
    <p>Эта программа выудит из текстового файла IP-адресс. Файл с IP-адрессом необходимо поместить в корневую папку php файла и назвать ip.txt</p>
    <input type="submit" value="Выудить IP" name="IP" style="width: 150px; height: 45px;">
    <?php
    if(isset($_POST['IP']))
    {
	$file = fopen("ip.txt", "r");
	$data = fgets($file);
	$ipcheck = '/\b((([1-9])|([1-9][0-9])|(1[0-9][0-9])|(2[0-5][0-5]))\.(\d|([1-9][0-9])|(1[0-9][0-9])|(2[0-5][0-5]))\.(\d|([1-9][0-9])|(1[0-9][0-9])|(2[0-5][0-5]))\.((2[0-5][0-5])|(1[0-9][0-9])|([1-9][0-9])|\d))\b/';
	preg_match_all($ipcheck, $data, $arr);
	foreach( $arr[0] as $i ) 
	{
		echo $i;
	}
	fclose($file);
    }	
    ?>
</form>
</body>
</html>