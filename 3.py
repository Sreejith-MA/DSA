a=input()
c=len(a)
if(c==1):
    if((ord (a[0])>64 and ord (a[0])<91))or((ord (a[0])>96 and ord (a[0])<123)):
        if((ord (a[0])==65) or (ord (a[0])==69) or (ord (a[0])==73) or(ord (a[0])==79) or(ord (a[0])==85) or(ord (a[0])==97) or(ord (a[0])==101) or(ord (a[0])==105) or(ord (a[0])==111) or(ord (a[0])==117)):
            print("Vowel")
        else:
            print("Consonant")
    else:
        print("invalid")
else:
    print("invalid")
