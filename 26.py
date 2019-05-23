a=int(input())
s=input()
s=s.split(' ')
c= [int(i) for i in s]
c.sort()
for i in range (c):
    print(c[i],end=" ")
