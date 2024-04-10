cod1, unit1, price1 = input().split()
cod1 = int(cod1)
unit1 = int(unit1)
price1 = float(price1)

cod2, unit2, price2 = input().split()
cod2 = int(cod2)
unit2 = int(unit2)
price2 = float(price2)

total = (unit1*price1) + (unit2*price2)

print("VALOR A PAGAR: R$ %.2f" %total)
