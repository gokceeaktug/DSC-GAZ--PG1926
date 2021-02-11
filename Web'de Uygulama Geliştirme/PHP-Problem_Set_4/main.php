<!DOCTYPE html>
<html>
<body>

<h1>Kasa </h1>
<form action="" method="post">
            <h5>ürünün fiyatını giriniz:</h5>
            <input type="number" name="product_price" step="0.01" >
            <br>
            <h5>müşterinin verdiği para miktarını giriniz: </h5>
            <input type="number" name="client_price" step="0.01"  >
            <br>
            <h5>Hesapla</h5>
            <input type="submit" name="hesapla" id="hesapla" value="hesapla" >
        </form>


<?php
if(isset($_POST['product_price']) && isset($_POST['client_price'])) {
    $urun_fiyati = $_POST['product_price'];
    $urun=floatval($urun_fiyati);
    $musteri_fiyati = $_POST['client_price'];
    $musteri=floatval($musteri_fiyati);
  
    if(empty($urun) || empty($musteri )) {
       echo 'Lütfen miktarı boş bırakmayın';
    } 
    elseif($urun >$musteri) 
    {
       echo "yetersiz bakiye";
    }
    elseif ($urun==$musteri)
    {
       echo "<p>Verdiğiniz para ürün fiyatı ile aynıdır.</p> <p> Para üstü verilmeyecektir.</p>" .$urun_fiyati . "$";
    }
    elseif($musteri>$urun)
    {
        $fark=$musteri-$urun;

        $ikiyuzluk = ($fark/200);
    
        if ($ikiyuzluk > 0) { // if the change is less than $20 this will be a 0
            $fark = $fark % 200;
            echo($ikiyuzluk + " adet 200 TL banknot");
        }
        
        $yuzluk = ($fark/100);
        if ($yuzluk > 0) {
            $fark = $fark % 100;
            echo($yuzluk + " adet 100 TL banknot");
        }
        
        $ellilik = ($fark/50);
        if ($ellilik > 0) {
            $fark = $fark % 50;
            echo($ellilik + " adet 50 TL banknot");
        }
        
        $yirmilik = ($fark/20);
        if ($yirmilik > 0) {
            $fark = $fark % 20;
            echo($yirmilik + " adet 20 TL banknot");
        }
        
        $onluk = ($paraustu/10);
        if ($onluk > 0) {
            $fark = $fark % 10;
            echo($onluk + " adet 10 TL banknot");
        }
        
        $beslik =($fark/5);
        if ($beslik > 0) {
            $fark = $fark % 5;
            echo($beslik + " adet 5 TL banknot");
        }
        
        $birlik = ($fark/1);
        if (birlik > 0) {
            $fark =$fark % 1;
            echo($birlik + " adet 1 TL banknot");
        }
        
        $ellikurus = ($fark/0.5);
        if ($ellikurus > 0) {
            $fark = $fark % 0.5;
            echo($ellikurus + " adet elli kuruş");
        }
        
        $yirmibeskurus = ($fark/0.25);
        if ($yirmibeskurus > 0) {
            $fark = $fark % 0.25;
            echo($yirmibeskurus + " adet yirmi beş kuruş");
        }
        
        $onkurus = ($fark/0.1);
        if ($onkurus > 0) {
            $fark = $fark % 0.1;
            echo($onkurus + " adet on kuruş");
        }
        
        $beskurus = ($fark/0.05);
        if ($beskurus > 0) {
            $fark = $fark % 1;
            echo($beskurus + " adet beş kuruş");
        }
        
        $birkurus = ($fark/0.01);
        if ($birkurus  > 0) {
            $fark = $fark % 1;
            echo($birkurus  + " adet bir kuruş");
        }

    }
 } else {
    echo 'Lütfen formu kullanın';
 }

?>

</body>
</html>