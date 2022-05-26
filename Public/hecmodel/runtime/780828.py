from hec.script import *
from hec.heclib.dss import *
from hec.io import *
from hec.heclib.util import HecTime
import java
myTime=HecTime()
myDss=HecDss.open("E:/php/Apache24/htdocs/wms/Public/hecmodel/780828/output.dss")
myDss.setTimeWindow("28Aug1978 0800 30Aug1978 0000")
file_object = open('E:/php/Apache24/htdocs/wms/Public/modeloutput/hec/780828_sim_1.txt', 'w')
file_object.write("[")
flow=myDss.get("//AX/FLOW/01AUG1978/1HOUR/RUN:RUN 1/")
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

file_object = open('E:/php/Apache24/htdocs/wms/Public/modeloutput/hec/780828_sim_2.txt', 'w')
file_object.write("[")
flow=myDss.get("//HL/FLOW/01AUG1978/1HOUR/RUN:RUN 1/")
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

file_object = open('E:/php/Apache24/htdocs/wms/Public/modeloutput/hec/780828_sim_3.txt', 'w')
file_object.write("[")
flow=myDss.get("//SL/FLOW/01AUG1978/1HOUR/RUN:RUN 1/")
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

file_object = open('E:/php/Apache24/htdocs/wms/Public/modeloutput/hec/780828_sim_4.txt', 'w')
file_object.write("[")
flow=myDss.get("//RESERVOIR-1/FLOW/01AUG1978/1HOUR/RUN:RUN 1/")
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


myDss.done()
