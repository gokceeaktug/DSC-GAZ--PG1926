liste = [] 
adet = int(input('Kaç Sayı Girilecek: '))
for n in range(adet):
    sayi = int(input('Sayıyı Gir: '))
    liste.append(sayi)
if 0 in liste : 
    dondur=[]
    count=liste.count(0)
    for i in range(count):
        dondur.append(0)
        liste.remove(0)
    dondur+=liste
    print("sıfırlar en başa geldi",dondur)
        # dondur.append(0)*liste.count(0)
# print (dondur)




# if(liste.count(0)):
#     dondur=[]
#     sayi=liste.count(0)
#     dondur.append(0)
    
# dondur.extend(liste)


