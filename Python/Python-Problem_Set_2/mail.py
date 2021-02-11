print("Kullanıcı adı yalnızca harf, rakam, kısa çizgi ve alt çizgi içerebilir.")
print("Web sitesi adı yalnızca harf ve rakamlardan oluşabilir.")
print("Uzantının maksimum uzunluğu 3 olmalıdır.")
uzanti_uzunlugu=int(input("uzunluğu giriniz : "))
def kontrol(str):
    uzanti_uzunlugu = 0
    if(uzanti_uzunlugu>3):
        print ("yanlış uzunluk")
    else:
        uzanti_uzunlugu = 0
        for ch in str:
            if ch == '@':
                uzanti_uzunlugu = uzanti_uzunlugu + 1
 
            if uzanti_uzunlugu== 1:
                return True
            else:
                return False
mail=input('Mail : ')
if(kontrol(mail)==True):
      print('Doğru')
else:
      print('Yanlış')