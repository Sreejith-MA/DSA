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
    print("invalid")
else:
    if((int(a))<0):
        print("Invalid")
    elif((int(a))==0):
        print("Invalid")
    else:
        if((int(a))%2==0):
            print("Even")
        else:
            print("Odd")

