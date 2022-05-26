from hec.script import *
from hec.heclib.dss import *
from hec.io import *
from hec.heclib.util import HecTime
import java
myDss=HecDss.open("E:/php/Apache24/htdocs/wms/Public/hecmodel/forcast/input_forcast_realtime.dss")
watershed="xixi"
loc="DAZHONG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="DONGGUAN"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="HONGLAI"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="HUANGYANG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="HUYANG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="JINXI"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="LUOZHONG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="PENGHU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="SHANMEI"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="SHANTOU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="SHILONG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="WEICUO"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="XITOUPU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="YONGCHUN"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="ANXI"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="CHANGHONG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="GANDE"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="GUANQIAO"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="HUTOU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="KENGZIKOU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="LINGJIAO"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="LUOZAI"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="NANAN"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="PENGLAI"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="SHANGQING"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="TAOZHOU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="XIANRONG"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="XIPING"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="XITA"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)
watershed="xixi"
loc="YINGDOU"
param="PRECIP-INC"
ver="forcast"
startTime="11Sep2018 1100"
values=[33.37]
hecTime=HecTime()
tsc=TimeSeriesContainer()
tsc.watershed=watershed
tsc.location=loc
tsc.parameter=param
tsc.version=ver
tsc.fullName="/%s/%s/%s//1HOUR/%s" % (watershed,loc,param,ver)
tsc.interval=60
hecTime.set(startTime)
times=[]
for value in values:
  times.append(hecTime.value())
  hecTime.add(tsc.interval)
tsc.values=values
tsc.times=times
tsc.startTime=times[0]
tsc.startTime=times[-1]
tsc.numberValues=len(values)
tsc.units="MM"
tsc.type="PER-CUM"
myDss.put(tsc)

myDss.done()
