a=input()
c=len(a)
d=0
for i in range(c):
    if((ord(a[i]))>47 and (ord(a[i]))<57):
        d=d+1
print(d)
