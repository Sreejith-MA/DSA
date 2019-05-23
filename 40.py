
a=int(input())
v=0
n1 = 1
n2 = 1
count = 0
if(a==1):
    print("1")
else:
    if a<= 0:
        v=0
    elif a == 1:
        v=0
    else:
        while count < a:
            print(n1,end=" ")
            nth = n1 + n2
            n1 = n2
            n2 = nth
            count += 1
