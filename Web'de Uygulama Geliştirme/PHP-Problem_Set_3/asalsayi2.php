<!DOCTYPE >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asal Sayı Bulma</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body bgcolor="lightblue">
<?php
$sayi=$_POST['sayi'];
 
$asal=0; $i=2;
 
do
{
	if ($sayi % $i == 0)
	{
		$asal = 1;
	}
	$i++;
}
while($i<$sayi);
 
if ($asal != 1)
{
	$sonuc="Sayı Asaldır";
}
else
{
	$sonuc="Sayı Asal Değildir";
}
 
?>
 
<table width="435" border="1">
  <tr >
    <td colspan="2" align="center">Asal Sayı Bulma</td>
  </tr>
  <tr >
    <td width="20">Girilen Sayı:</td>
    <td width="213"><?php echo $sayi; ?></td>
  </tr>
  <tr >
    <td colspan="2">
    
<h1><?php echo $sonuc; ?>  </h1>
 
    
    </td>
  </tr>
</table>
<a HREF="asalsayi1.php">Geri dön</a>
<br />
 
</body>
</html>