n1, n2, n3, n4 = map(float, input().split())

average = ((n1*2) + (n2*3) + (n3*4) + n4)/10
print("Media: %.1f" %average)

if(average>=7):
    print("Aluno aprovado.")
elif(average<5):
    print("Aluno reprovado.")
elif(average>=5 and average<7):
    print("Aluno em exame.")
    
    exam = float(input())
    print("Nota do exame: %.1f" %exam)
    
    examAverage = (exam+average)/2
    if(examAverage>=5):
        print("Aluno aprovado.")
    elif(examAverage<5):
        print("Aluno reprovado.")
    print("Media final: %.1f" %examAverage)
        
    
