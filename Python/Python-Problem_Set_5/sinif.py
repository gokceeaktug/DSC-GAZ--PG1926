class Sinif:                         
   def __init__(self, okul_adi, ogrenci_sayisi,ogretmen_sayisi,calisan_sayisi,laboratuvar_sayisi): 
     self.okul_adi = okul_adi                           
     self.ogrenci_sayisi = ogrenci_sayisi
     self.ogretmen_sayisi = ogretmen_sayisi
     self.calisan_sayisi = calisan_sayisi
     self.laboratuvar_sayisi = laboratuvar_sayisi
okul_1 = Sinif("Ömer Seyfettin Anadolu Lisesi", 100,20 ,["fen","sosyal"], 5)                       
okul_2= Sinif("DR. Binnaz Ege – DR. Rıdvan Ege Anadolu Lisesi", 200, 50, ["fen","sosyal"],3)
okul_3 = Sinif("Ayrancı Anadolu Lisesi", 150, 40, ["fen","sosyal"],5)


print("1.okulun adı : ",okul_1.okul_adi)
print("1.okulun öğrenci sayısı",okul_1.ogrenci_sayisi)
print("1.okulun öğretmen sayısı",okul_1.ogretmen_sayisi)
print("1.okuldaki çalışan sayısı",okul_1.calisan_sayisi)
print("1.okuldaki laboratuvar sayısı",okul_1.laboratuvar_sayisi)
print("2.okulun adı : ",okul_2.okul_adi)
print("2.okulun öğrenci sayısı",okul_2.ogrenci_sayisi)
print("2.okulun öğretmen sayısı",okul_2.ogretmen_sayisi)
print("2.okuldaki çalışan sayısı",okul_2.calisan_sayisi)
print("2.okuldaki laboratuvar sayısı",okul_2.laboratuvar_sayisi)
print("3.okulun adı : ",okul_3.okul_adi)
print("3.okulun öğrenci sayısı",okul_3.ogrenci_sayisi)
print("3.okulun öğretmen sayısı",okul_3.ogretmen_sayisi)
print("3.okuldaki çalışan sayısı",okul_3.calisan_sayisi)
print("3.okuldaki laboratuvar sayısı",okul_3.laboratuvar_sayisi)

print("okul isimleri güncellendi")
okul_1.okul_adi="Ankara Anadolu Lisesi"
okul_2.okul_adi="Hacı Ömer Tarman Lisesi"
okul_3.okul_adi="Milli Piyango Anadolu Lisesi"
print("1.okulun adı : ",okul_1.okul_adi)
print("2.okulun adı : ",okul_2.okul_adi)
print("3.okulun adı : ",okul_3.okul_adi)