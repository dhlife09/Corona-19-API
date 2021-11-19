# [v1.0] 국내 카운터 Response

```
version 1.0 (API Update: 21-11-19 & Document Update: 21-11-19)

** 처음에 배포용으로 제작하지 않아 Type이 Int나 Float가 아닌 대부분 String으로 제공됩니다. 신규 API에서는 해당 문제가 해결되었으므로 참고 부탁드립니다.

** 21-11-02: 코로나19 공식 홈페이지가 변경되어 일부 정보가 제공되지 않습니다. 자세한 사항은 이슈(#58)를 확인해 주세요.
```

|Key|Type|항목명(한글)|Description|Sample Data|
|---|--|---|--|--|
|resultCode|String|응답코드|정상(0) / 기타 메시지(오류)는 하단의 공통 오류메시지 참고|0|
|TotalCase|String|국내 확진자수|-|10,237|
|TotalRecovered|String|국내 완치자수|-|6,463|
|TotalDeath|String|국내 사망자수|-|183|
|NowCase|String|국내 격리자수|-|3,591|
|city1n|String|시도별 확진환자 현황1(이름)|시도별 확진환자 현황에서 1번째로 많은 확진환자가 있는 시도의 이름|대구|
|city2n|String|시도별 확진환자 현황2(이름)|시도별 확진환자 현황에서 2번째로 많은 확진환자가 있는 시도의 이름|경북|
|city3n|String|시도별 확진환자 현황3(이름)|시도별 확진환자 현황에서 3번째로 많은 확진환자가 있는 시도의 이름|기타|
|city4n|String|시도별 확진환자 현황4(이름)|시도별 확진환자 현황에서 4번째로 많은 확진환자가 있는 시도의 이름|경기|
|city5n|String|시도별 확진환자 현황5(이름)|시도별 확진환자 현황에서 5번째로 많은 확진환자가 있는 시도의 이름|서울|
|city1p|String|시도별 확진환자 현황1(퍼센트)|시도별 확진환자 현황에서 1번째로 많은 확진환자가 있는 시도의 퍼센트율|66.11|
|city2p|String|시도별 확진환자 현황2(퍼센트)|시도별 확진환자 현황에서 2번째로 많은 확진환자가 있는 시도의 퍼센트율|12.84|
|city3p|String|시도별 확진환자 현황3(퍼센트)|시도별 확진환자 현황에서 3번째로 많은 확진환자가 있는 시도의 퍼센트율|10.07|
|city4p|String|시도별 확진환자 현황4(퍼센트)|시도별 확진환자 현황에서 4번째로 많은 확진환자가 있는 시도의 퍼센트율|5.59|
|city5p|String|시도별 확진환자 현황5(퍼센트)|시도별 확진환자 현황에서 5번째로 많은 확진환자가 있는 시도의 퍼센트율|5.39|
|recoveredPercentage|Float|국내 완치율|단위: 퍼센트|63.13|
|deathPercentage|Float|국내 사망률|단위: 퍼센트|1.79|
|checkingCounter|String|국내 검사중|단위: 명|19,571|
|checkingPercentage|String|국내 검사중|단위: 퍼센트|4.2|
|caseCount|String|국내 검사결과 양성|단위: 명|10,237|
|casePercentage|String|국내 검사결과 양성|단위: 퍼센트|2.2|
|notcaseCount|String|국내 검사결과 음성|단위: 명|431,425|
|notcasePercentage|String|국내 검사결과 음성|단위: 퍼센트|93.5|
|TotalChecking|String|총 검사완료 수|단위: 명|461,233|
|TodayRecovered|String|오늘 하루 완치자수|단위: 명|135|
|TodayDeath|String|오늘 하루 사망자수|단위: 명|2|
|TotalCaseBefore|String|전날 대비 환자수|단위: 명|-61|
|source|String|데이터 수집 방법|AUTO_BOT(자동수집), GOODBYE_CORONA(수동적으로 추가되거나 보완된 데이터)|AUTO_BOT|
|updateTime|String|정보 업데이트 기준|00시 정보로 오전 10시경 자동으로 업데이트 됩니다.|코로나바이러스감염증-19 국내 발생현황 (4.5. 00시 기준)|
|resultMessage|String|API 처리 결과|정상처리: (정상 처리되었습니다.) / 오류(Unauthorized)|정상 처리되었습니다.|
