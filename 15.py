a=input()
a=a.split(" ")
c=int(a[0])
d=int(a[1])
for i in range(c+1,d):
    if ((i%2)==0):
        print (i,end=" ")
