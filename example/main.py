'''

굿바이코로나 Corona-19-API 파싱예제 파이썬 샘플 코드입니다.
해당 코드를 사용하기 위해서는 Corona-19-API 서비스키(API키)를 발급받은 후 key에 값을 대입해주세요.

https://api.corona-19.kr/
https://github.com/dhlife09/Corona-19-API

Copyright © dhlife09. All rights reserved.

'''

import requests
import json
import re #계산을 위한 특수문자 제거

#####
korea = "http://api.corona-19.kr/korea?serviceKey="
country = "http://api.corona-19.kr/korea/country?serviceKey="
key = "여기에 API 키를 입력해주세요." #API 키(https://api.corona-19.kr/ 에서 무료 발급 가능)
###

response = requests.get(korea + key)
text = response.text
data = json.loads(text)

response2 = requests.get(country + key)
text2 = response2.text
data2 = json.loads(text2)

#####
code = response.status_code
code2 = response2.status_code

if code == 200: #API 응답 헤더 코드가 정상(200)일 경우 데이터 제공
  if code2 == 200:
    print('[',(data["updateTime"]),']')
    print("\n")

    print('확진자:',data["TotalCase"],' [+',data2["data0_1"],']')
    print('완치자:',data["TotalRecovered"],' [+',data["TodayRecovered"],']')
    print('사망자:',data["TotalDeath"])
    print('치료중:',data["NowCase"])
    print("\n")

    a = int(re.sub('[-=.,#/?:$}]', '', data["caseCount"]))
    b = int(re.sub('[-=.,#/?:$}]', '', data["TotalChecking"]))
    
    caseper = a / b * 100 #확진율계산법: 양성/검사완료수 * 100

    print('확진율:',round(caseper,2),"%")
    print('완치율:',data["recoveredPercentage"],"%")
    print('사망률:',data["deathPercentage"],"%")

    print("\n")
    print('API Service by Goodbye-Corona(https://api.corona-19.kr)')
    print('===========================================================')
  else: #API 응답 헤더 코드가 정상(200)이 아닐 경우, Response Code와 Response Message 노출
    print('=== [ ERROR REPORTING ] ===')
    print("\n")
    print('API Response Code(KOREA):',data["resultCode"])
    print('API Response Message(KOREA):',data["resultMessage"])
    print("\n")
    print('API Response Code(COUNTRY):',data2["resultCode"])
    print('API Response Message(COUNTRY):',data2["resultMessage"])
    print("\n")
    print('API Service by Goodbye-Corona(https://api.corona-19.kr)')
    print('============================')
else: #API 응답 헤더 코드가 정상(200)이 아닐 경우, Response Code와 Response Message 노출
    print('=== [ ERROR REPORTING ] ===')
    print("\n")
    print('API Response Code(KOREA):',data["resultCode"])
    print('API Response Message(KOREA):',data["resultMessage"])
    print("\n")
    print('API Response Code(COUNTRY):',data2["resultCode"])
    print('API Response Message(COUNTRY):',data2["resultMessage"])
    print("\n")
    print('API Service by Goodbye-Corona(https://api.corona-19.kr)')
    print('============================')
