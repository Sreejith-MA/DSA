c=int(input())
a=input()
a=a.split(' ')
v= [int(i) for i in a]
v.sort()
c=int(c/2)
print(v[c])
