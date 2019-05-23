a=input()
f=a.count(" ")
c=len(a)
d=0
e=0
for i in range(c):
    if(((ord(a[i]))>64 and (ord(a[i]))<91) or ((ord(a[i]))>96 and (ord(a[i]))<123) or ((ord(a[i]))>47 and (ord(a[i]))<58)):
        e=0
    else:
        d=d+1
        
print(d-f)
