import math

n = int(input())

print(n)

print(f"{math.trunc(n/100)} nota(s) de R$ 100,00")
n = n-(100*math.trunc(n/100)) #n menos as notas de 100

print(f"{math.trunc(n/50)} nota(s) de R$ 50,00")
n = n-(50*math.trunc(n/50)) #n menos as notas de 50

print(f"{math.trunc(n/20)} nota(s) de R$ 20,00")
n = n-(20*math.trunc(n/20)) #n menos as notas de 20

print(f"{math.trunc(n/10)} nota(s) de R$ 10,00")
n = n-(10*math.trunc(n/10)) #n menos as notas de 10

print(f"{math.trunc(n/5)} nota(s) de R$ 5,00")
n = n-(5*math.trunc(n/5)) #n menos as notas de 5

print(f"{math.trunc(n/2)} nota(s) de R$ 2,00")
n = n-(2*math.trunc(n/2)) #n menos as notas de 2

print(f"{n} nota(s) de R$ 1,00")
