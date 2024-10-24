import math

ageDays = int(input())

year = math.trunc(ageDays/365) #o ano será a idade em dias dividido por 365 dias do ano
month = math.trunc((ageDays-(year*365))/30) #o mês é a idade em dias menos o ano convertido em dias dividido por 30 dias do mês
days = ageDays-(month*30)-(year*365) #o dia é a idade em dias menos o mês e o ano convertido em dias

print(f"{year} ano(s)")
print(f"{month} mes(es)")
print(f"{days} dia(s)")
