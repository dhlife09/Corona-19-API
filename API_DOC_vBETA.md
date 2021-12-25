# [vBETA] BETA-API Response
 
version BETA (API Update: 21-11-19 & Document Update: 21-11-19)
 
** 해당 버전은 공개 베타 버전 입니다.

** 베타 버전으로 아래 항목들은 변경될 수 있습니다.

---
 
```
GET /korea/beta/?serviceKey={API_KEY}
Host: api.corona-19.kr
```
 
|Key|Type|항목명(한글)|Description|Sample Data|
|---|--|---|--|--|
|apiName|String|API명|추후 업데이트로 사라질 수 있습니다.|Corona-19-API-국내-발생현황-beta|
|updateTime|String|데이터 업데이트 시간|-|코로나바이러스감염증-19 국내 발생현황 (11.19. 00시 기준)|
|resultCode|Integer|API 처리 결과 코드|-|200|
|resultMessage|String|API 처리 결과|-|정상 처리되었습니다.|
|isolDec|String|전일대비(치료중)|-|확인 중(확인 될 경우 float로 제공예정)|
|confPcnt|String|국내 확진율|-|확인 중(확인 될 경우 float로 제공예정)|
|recPcnt|Float|국내 완치율|-|90.13|
|deathPcnt|Float|국내 사망률|-|0.79|
|country1N|String|확진자수가 Top1인 시도명|-|서울|
|country1P|Float|확진자수가 Top1인 시도의 퍼센트율|-|33.7|
|countryNm|String|데이터에 해당되는 시도명|-|합계|
|totalCnt|Integer|코로나19 확진자 수(전체)|-|409099|
|recCnt|Integer|코로나19 완치자 수|-|368723|
|deathCnt|Integer|코로나19 사망자 수|-|3215|
|isolCnt|Integer|코로나19 치료중인 확진자 수|-|37161|
|qurRate|Integer|코로나19 발생률|-|789|
|incDec|Integer|전일대비(확진)|-|3034|
|incDecK|Integer|전일대비(확진-지역)|-|3011|
|incDecF|Integer|전일대비(확진-해외)|-|23|
