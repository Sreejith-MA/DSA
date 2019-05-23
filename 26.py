c=int(input())
a=input()
a=a.split(' ')
v= [int(i) for i in a]
v.sort()
for i in range (c):
    print(v[i],end=" ")
