A, B, C = map(float, input().split())

number = ((B**2)-4*A*C)

if(A==0 or number<0): #checar que A é 0 e se a raiz não calculará um número negativo
    print("Impossivel calcular")
else:
    squareRoot = number**.5
    R1 = (-B+squareRoot)/(2*A)  
    R2 = (-B-squareRoot)/(2*A) 
    print("R1 = %.5f" %R1)
    print("R2 = %.5f" %R2)
