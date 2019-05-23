a=input()
c=len(a)
d=0
for i in range(c):
    d=d+((int(a[i]))*(int(a[i]))*(int(a[i])))
if((int(a))==d):
    print("yes")
else:
    print("no")
