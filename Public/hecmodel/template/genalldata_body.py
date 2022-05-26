file_object = open('outputtxtfile', 'w')
file_object.write("[")
flow=myDss.get("outputpath")
L=flow.values
T=flow.times
i=0
for x in T :
 if(i>0):
  file_object.write(",")
 file_object.write("[")
 myTime.set(x)
 file_object.write("'"+str(myTime.year())+"-"+str(myTime.month())+"-"+str(myTime.day())+" "+str(myTime.hour())+":00"+"'")
 file_object.write(",")
 file_object.write("%.4f" % L[i])
 file_object.write("]")
 i=i+1
file_object.write("]")
file_object.close( )