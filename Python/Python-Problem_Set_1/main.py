for sayi in range(0,100):
    if sayi % 3 == 0 and sayi % 5 == 0:
        print("fizzbuzz")
        continue
    elif sayi % 3 == 0:
        print("fizz")
        continue
    elif sayi % 5 == 0:
        print("buzz")
        continue
    print(sayi)