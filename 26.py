q=int(input())
w=input()
w=w.split(' ')
e= [int(i) for i in w]
e.sort()
for i in range (q):
    print(e[i],end=" ")
