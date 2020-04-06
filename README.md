




# [JSON] Corona-19-API

코로나바이러스감염증-19 관련 API 서비스를 제공합니다.
문서를 수정 중 입니다.

Corona-19-API을 사용하려면 README.md 문서를 확인하세요.

---
## 서비스키 발급
### 1. 샘플 키
- fff098a39e0a841ab72e1d27bdee9b517 [기한: 4월 13일]

### 2. 키 발급
- 현재 해당 내용을 포함한 여러 내용을 작성하고 있습니다. 필요하시다면 GitHub Issue 또는 이메일 주소(dhlife09@gmail.com)으로 메일을 보내주세요.
---
## 국내 정보
 ### 1. 국내 카운터
  - 제공 정보: 국내 확진자수, 국내 완치자수, 국내 사망자수, 국내 격리자수, 확진환자 현황 상위 1-5 시도명 및 퍼센트율, 누적 검사수, 누적 검사완료수, 누적 확진률, 검사중/결과양성/결과음성 카운터 및 퍼센트 등
 - 정보 출처: http://ncov.mohw.go.kr/
 
```html
http://api.corona-19.kr/korea/?serviceKey=APIKey
```
※ 요청
|항목명|항목설명|예제|
|---|---|--|
|serviceKey|API 인증키|http://api.corona-19.kr/korea/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|

※ 응답
|항목명(영어)|항목명(한글)|비고|샘플데이터|
|---|---|--|--|
|resultCode|응답코드|정상(0), 권한이 없거나 잘못된 키(401)|0|
|TotalCase|국내 확진자수|-|10,237|
|TotalRecovered|국내 완치자수|-|6,463|
|TotalDeath|국내 사망자수|-|183|
|NowCase|국내 격리자수|-|3,591|
|city1n|시도별 확진환자 현황1(이름)|시도별 확진환자 현황에서 1번째로 많은 확진환자가 있는 시도의 이름|대구|
|city2n|시도별 확진환자 현황2(이름)|시도별 확진환자 현황에서 2번째로 많은 확진환자가 있는 시도의 이름|경북|
|city3n|시도별 확진환자 현황3(이름)|시도별 확진환자 현황에서 3번째로 많은 확진환자가 있는 시도의 이름|기타|
|city4n|시도별 확진환자 현황4(이름)|시도별 확진환자 현황에서 4번째로 많은 확진환자가 있는 시도의 이름|경기|
|city5n|시도별 확진환자 현황5(이름)|시도별 확진환자 현황에서 5번째로 많은 확진환자가 있는 시도의 이름|서울|
|city1p|시도별 확진환자 현황1(퍼센트)|시도별 확진환자 현황에서 1번째로 많은 확진환자가 있는 시도의 퍼센트율|66.11|
|city2p|시도별 확진환자 현황2(퍼센트)|시도별 확진환자 현황에서 2번째로 많은 확진환자가 있는 시도의 퍼센트율|12.84|
|city3p|시도별 확진환자 현황3(퍼센트)|시도별 확진환자 현황에서 3번째로 많은 확진환자가 있는 시도의 퍼센트율|10.07|
|city4p|시도별 확진환자 현황4(퍼센트)|시도별 확진환자 현황에서 4번째로 많은 확진환자가 있는 시도의 퍼센트율|5.59|
|city5p|시도별 확진환자 현황5(퍼센트)|시도별 확진환자 현황에서 5번째로 많은 확진환자가 있는 시도의 퍼센트율|5.39|
|recoveredPercentage|국내 완치율|-|63.13|
|deathPercentage|국내 사망률|-|1.79|
|checkingCounter|국내 검사중|단위: 명|19,571|
|checkingPercentage|국내 검사중|단위: 퍼센트|4.2|
|caseCounter|국내 검사결과 양성|단위: 명|10,237|
|casePercentage|국내 검사결과 양성|단위: 퍼센트|2.2|
|notcaseCount|국내 검사결과 음성|단위: 명|431,425|
|notcasePercentage|국내 검사결과 음성|단위: 퍼센트|93.5|
|TotalChecking|총 검사완료 수|단위: 명|461,233|
|TodayRecovered|오늘 하루 완치자수|단위: 명|135|
|updateTime|정보 업데이트 기준|00시정보로 오전10시경 업데이트|코로나바이러스감염증-19 국내 발생현황 (4.5. 00시 기준)|
|resultMessage|API 처리 결과|정상(정상 처리되었습니다.), 오류(권한이 없거나 잘못된 키 입니다. \"github.com\/dhlife09\/Corona-19-API\"에 방문하세요.)|정상 처리되었습니다.|

※ JSON 샘플 응답(전문)
- [https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json](https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json)

 



 ### 2. 시도별 발생동향
  - 제공 정보: 전일대비 확진환자 증감, 확진환자수, 격리해제수, 사망자수, 발생률 등
 - 정보 출처: http://ncov.mohw.go.kr/
 
```html
http://api.corona-19.kr/korea/country/?serviceKey=APIKey
```
※ 요청
|항목명|항목설명|예제|
|---|---|--|
|serviceKey|API 인증키|http://api.corona-19.kr/korea/country/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|

※ 규칙

```html
지역명(항목명)|data{num1}_{num2} 에서 / num1: 지역 코드로 0(합계)~18(검역)까지 / num2: 0(지역명(항목명)), 1(신규확진수), 2(확진환자수), 3(완치자수), 4(사망자수), 5(발생룰
```

※ 응답
|항목명(영어)|항목명(한글)|비고|샘플데이터|
|---|---|--|--|
|resultCode|응답코드|정상(0), 권한이 없거나 잘못된 키(401)|0|
|data0_0|지역명(항목명)|-|합계|
|data0_1|신규확진수|-|47|
|data0_2|확진환자수|-|10284|
|data0_3|완치자수|-|6598|
|data0_4|사망자수|-|186|
|data0_5|발생률|-|19.84|
|data1_0|지역명(항목명)|-|서울|
|data1_1|신규확진수|-|11|
|data1_2|확진환자수|-|563|
|data1_3|완치자수|-|151|
|data1_4|사망자수|-|0|
|data1_5|발생률|-|5.78|
|규칙 생략|규칙 생략|상단에 있는 규칙을 확인해주세요.|-|
|data18_3|완치자수|-|2|
|data18_4|사망자수|-|0|
|data18_5|발생률|-|-|
|resultMessage|API 처리 결과|정상(정상 처리되었습니다.), 오류(권한이 없거나 잘못된 키 입니다. \"github.com\/dhlife09\/Corona-19-API\"에 방문하세요.)|정상 처리되었습니다.|

※ JSON 샘플 응답(전문)
- [https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json](https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json)

---

## 전세계 정보(준비중)
### 1. 전세계 카운터
- 제공 정보: 전세계 확진자수, 전세계 완치자수, 전세계 사망자수, 전세계 현재 환자수
- 정보 출처: https://www.worldometers.info/coronavirus/index.php
