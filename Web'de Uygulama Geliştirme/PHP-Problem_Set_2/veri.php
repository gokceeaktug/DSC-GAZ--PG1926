<!--veri.php dosyası-->
<html>
<head>
<title>Veriler</title>
</head>
<body>
<?php 
$_POST['ad'];


$_POST['ad']=$i;
$toplam=0; 
while($toplam<=3) 
{
	$i++; 
	$itoplam=0;
	for($k=1;$k<$i;$k++) 
	{
		
		if($i  % $k == 0) 
		{
			$itoplam+=$k;
		}
	}
	if($itoplam==$i) 
	{
		echo "$i <br />";
		$toplam++;
      
    }
echo $_POST['ad'] ;  
}?>
</body>
</html>