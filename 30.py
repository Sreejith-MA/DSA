a=input()
c=input()
a=a.split(" ")
c=c.split(" ")
d=int(a[0])
e=int(a[1])
f=int(c[0])
g=int(c[1])
d=(d*60)+e
f=(f*60)+g
if(d>f):
    d=d-f
else:
    d=f-d
z=d/60
y=d%60
print(int(z),end=" ")
print(y)
    
