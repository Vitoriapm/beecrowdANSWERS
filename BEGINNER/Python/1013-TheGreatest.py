#recebe os três valores de uma vez só, sendo separados por um espaço
a, b, c = map(int, input().split())

#criar uma função que recebe dois valores verifica o maior
def MaiorNum(a, b):
    return (a+b+abs(a-b))/2

#verificar o maior entre a e b
MaiorAB = MaiorNum(a,b)
#verificar o maior entre o resultado de a e b com c
MaiorTotal = MaiorNum(MaiorAB, c)

#arredonda o valor do total e imprime
print(f"{round(MaiorTotal)} eh o maior")
