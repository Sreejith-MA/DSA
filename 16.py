a=input()
a=a.split(" ")
c=int(a[0])
d=int(a[1])
e=[]
if (c<2):
    print("2",end=" ")
for i in range(c,d):  
   if i > 1:  
       for j in range(2,i):  
           if (i % j) == 0:  
               break  
       else:  
           if(i%2!=0):
            print(i,end=" ")
