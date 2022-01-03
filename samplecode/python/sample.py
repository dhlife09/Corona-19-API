'''

굿바이코로나 Corona-19-API 파싱예제 파이썬 샘플 코드입니다.
해당 코드를 사용하기 위해서는 Corona-19-API 서비스키(API키)를 발급받은 후 key에 값을 대입해주세요.

https://api.corona-19.kr/
https://github.com/dhlife09/Corona-19-API

Copyright © dhlife09 & DevEnne. All rights reserved.

'''

import requests
import json

korea = "https://api.corona-19.kr/korea/beta/?serviceKey=" # 국내 코로나 발생 동향
vaccine = "https://api.corona-19.kr/korea/vaccine/?serviceKey=" # 예방접종 현황
apikey = "" # API 키를 다음 란에 입력해 주세요.

response = requests.get(korea + apikey)
message = response.text
data = json.loads(message)

response2 = requests.get(vaccine + apikey)
message2 = response2.text
data2 = json.loads(message2)

status = response.status_code
status2 = response2.status_code

if status == 200: # 국내 코로나 발생 동향이 정상적으로 불러와졌을경우
    if status2 == 200: # 예방접종 현황이 정상적으로 불러와졌을경우
        print("Corona-19-API Python 국내 코로나 발생 동향")
        print("\n")
        print('[',(data["API"]["updateTime"]),']')
        print("\n")
        print('국내 확진자 수:', format(data["korea"]["totalCnt"], ','), "명")
        print('전일 신규합계 확진자 수:', format(data["korea"]["incDec"], ','), "명")
        print('국내 완치자 수:', format(data["korea"]["recCnt"], ','), "명")
        print('국내 사망자 수:', format(data["korea"]["deathCnt"], ','), "명")
        print('국내 치료중 수:', format(data["korea"]["isolCnt"], ','), "명")
        print('국내 코로나 발생률:', format(data["korea"]["qurRate"], ','), "%")
        print("\n")
        print("Corona-19-API Python 국내 예방접종 현황")
        print("\n")
        print('[', (data2["API"]["apiName"]), (data2["API"]["dataTime"]), ']')
        print("\n")
        print('1차 접종 완료 수:', format(data2["korea"]["vaccine_1"]["vaccine_1"], ','), "명")
        print('1차 접종 전일 신규합계: +', format(data2["korea"]["vaccine_1"]["vaccine_1_new"], ','), "명")
        print("\n")
        print('2차 접종 완료 수:', format(data2["korea"]["vaccine_2"]["vaccine_2"], ','))
        print('2차 접종 전일 신규합계: +', format(data2["korea"]["vaccine_2"]["vaccine_2_new"], ','),  "명")
else:
    print("정상적으로 처리되지 않았습니다. API 키를 올바르게 입력했는지 확인해주세요.")
