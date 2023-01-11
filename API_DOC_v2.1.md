# [v2.1] 국내전체-API Response
 
version 2.1 (API Update: 23-01-12 & Document Update: 23-01-12)
 
** 해당 버전은 v2.1 v2.0_beta 버전에 해당하는 문서 입니다.

** 베타 버전일 경우 API가 문서와 일부 차이가 있을 수 있습니다.

---
 
```
GET /korea/?serviceKey={API_KEY}
Host: api.corona-19.kr
```
 

 
|Key|Type|항목명(한글)|Description|Sample Data|
|---|--|---|--|--|
|apiName|String|API명||Corona-19-API-국내-발생현황-beta|
|updateTime|String|데이터 업데이트 시간|-|코로나19 국내 발생현황 (2023년 01.19. 00시 기준)|
|resultCode|Integer|API 처리 결과 코드|-|200|
|resultMessage|String|API 처리 결과|-|정상 처리되었습니다.|
|deathPcnt|Float|국내 사망률|-|0.79|
|countryNm|String|데이터에 해당되는 시도명|-|합계|
|totalCnt|Integer|코로나19 확진자 수(전체)|-|409099|
|deathCnt|Integer|코로나19 사망자 수|-|3215|
|qurRate|Integer|코로나19 발생률|-|789|
|incDec|Integer|전일대비(확진)|-|3034|
|incDecK|Integer|전일대비(확진-지역)|-|3011|
|incDecF|Integer|전일대비(확진-해외)|-|23|
