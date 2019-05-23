a=input()
d=0
c=len(a)
if (ord (a[0])<57):
    if(ord (a[0])>47 or ord (a[0])==45 or ord (a[0])== 43):
        for i in range (1,c):
            if(ord (a[i])>47 and ord (a[i])<58):
                d=1
            else:
                d=d-1
    else:
        d=d-1
else:
    d=d-1
if (d<0):
    print("invalid Input")
else:
    if((int(a))<0):
        print("Negative")
    elif((int(a))==0):
        print("Zero")
    else:
        print("Positive")

