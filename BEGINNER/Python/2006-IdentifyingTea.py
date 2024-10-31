T = int(input())

A, B, C, D, E = map(int, input().split())
answers = [A, B, C, D, E];

correctAnswer = 0;

for i in answers:
    if (i == T):
        correctAnswer+=1

print(correctAnswer)
