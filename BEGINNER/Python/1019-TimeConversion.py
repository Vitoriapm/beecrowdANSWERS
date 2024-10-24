import math

n = int(input())

hours = math.trunc(n/3600) #recebe o valor dos segundos e converte para horas
minutes = math.trunc((n/60)-(hours*60)) #converte os segundos e as horas recebidas para minutos e calcula a diferença 
seconds = n-(minutes*60)-(hours*3600) #pega o valor total de segundos recebidos menos os minutos e as horas calculadas

print(f"{hours}:{minutes}:{seconds}")
