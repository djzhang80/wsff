watershed="t_part1"
loc="t_part2"
param="PRECIP-INC"
ver="t_part6"
startTime="t_startTime"
values=t_values
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