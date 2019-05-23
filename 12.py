a=input()
c=0
d=len(a)
for i in range (d):
    if ((int(a[0+i]))==(int(a[d-1-i]))):
        c=c+1
    else:
        c=c-1
if(c==d):
    print("yes")
else:
    print("no")
