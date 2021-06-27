#!/user/bin/Python

import re
#2018-06-04,Italy,Netherlands,1,1,Friendly,Turin,Italy,FALSE
pattern= re.compile(r'^(\d{4,4})-(.*?),(.*),Friendly,.*$')


f= open("resultados.csv", "r", encoding='utf-8')
#print(type(f))
for line in f:
    res = re.match(pattern, line)

    if res:
        pass
        print (res.group(3))

f.close
