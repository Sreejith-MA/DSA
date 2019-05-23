a=input()
c=len(a)
if(c==1):
    if((ord (a[0])>64 and ord (a[0])<91))or((ord (a[0])>96 and ord (a[0])<123)):
        print("Alphabet")
    else:
        print("No")
else:
    print("No")
