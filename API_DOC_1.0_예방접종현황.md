# [v1.0] 예방접종현황 API Response
 

version 1.0 (API Update: 22-01-14 & Document Update: 22-01-14)

** 국내 시도별 코로나19 예방접종현황만 제공됩니다. (격리(quarantine)에 대한 예방접종현황은 제공되지 않습니다.)

** [예방접종현황 API 추가 안내사항](https://github.com/dhlife09/Corona-19-API/discussions/71)

---


```
GET /korea/vaccine/?serviceKey={API_KEY}
Host: api.corona-19.kr
```
 
|Key|Type|항목명(한글)|Description|Sample Data|
|---|--|---|--|--|
|apiName|String|API명||Corona-19-API-예방접종현황-v1|
|dataTime|String|데이터 업데이트 시간|-|12.24., 24시 기준|
|dataSource|String|데이터 수집 방법|-|Goodbye-Corona-Bot|
|resultCode|String|API 처리 결과 코드|-|200|
|resultMessage|String|API 처리 결과|-|정상 처리되었습니다.|
|countryNm|String|데이터에 해당되는 시도명|-|합계|
|vaccine_1|Integer|1차접종 완료(전체=신규+기존)|-|43968611|
|vaccine_1_new|Integer|1차접종 완료(신규)|-|78717|
|vaccine_1_old|Integer|1차접종 완료(기존)|-|43889894|
|vaccine_2|Integer|2차접종 완료(전체=신규+기존)|-|42307415|
|vaccine_2_new|Integer|2차접종 완료(신규)|-|43219|
|vaccine_2_old|Integer|2차접종 완료(기존)|-|42264196|
|vaccine_3|Integer|3차접종 완료(전체=신규+기존)|-|15114773|
|vaccine_3_new|Integer|3차접종 완료(신규)|-|777917|
|vaccine_3_old|Integer|3차접종 완료(기존)|-|14336856|
