X, Y = map(int, input().split())

if(X==1):
    price = 4.0
elif(X==2):
    price = 4.5
elif(X==3):
    price = 5.0
elif(X==4):
    price = 2.0
elif(X==5):
    price = 1.5

total = price * Y

print("Total: R$ %.2f" %total)
