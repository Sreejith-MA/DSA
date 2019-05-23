a=input()
a=a.split(" ")
d=0
e=(int(a[0]))
f=(int(a[1]))
g=0
h=0
i=0
for j in range(e,f):
    g=int(j%10)
    h=int(j/10)
    i=int(h/10)
    h=int(h%10)
    d=(g*g*g)+(h*h*h)+(i*i*i)
    if(j==d):
        print(d,end=" ")
