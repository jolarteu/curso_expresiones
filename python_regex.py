#!/user/bin/Python

import re
#2018-06-04,Italy,Netherlands,1,1,Friendly,Turin,Italy,FALSE
pattern= re.compile(r'^(\d{4,4})-(.*?),(.+?)(\d+),(\d+).*$')

i=0
j=0

f= open("resultados.csv", "r", encoding='utf-8')
#print(type(f))
for line in f:
    res = re.match(pattern, line)

    if res:
        t=int(res.group(4))+int(res.group(5))
        if t>20:
            j=1+j
            #print(t)
            print (line)

        #print (res.group(4))
    i=1+i

print(i)
print(j)
f.close
