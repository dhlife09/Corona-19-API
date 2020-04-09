# [JSON] Corona-19-API

코로나바이러스감염증-19 관련 API 서비스를 제공합니다.
- 24시간 운영(업타임: https://status.corona-19.kr)
- API 호출 수 제한 없음
- 공식 자료 사용(ncov.mohw.go.kr)

Corona-19-API 사용을 원하시면 README.md 문서를 확인하세요.
Corona-19-API 업데이트 로그 확인을 원하시면 update_log.md5 문서를 확인하세요.

## 서비스키 발급
### 1. 키 발급
- https://api.corona-19.kr/ 에 방문해서 이메일 주소, 사용 목적을 입력하신 후 "API 키 발급하기" 버튼을 눌러주세요.
- 버튼을 누르면 메일로 API 키가 발송됩니다.

### 2. 샘플 키
- fff098a39e0a841ab72e1d27bdee9b517 [유효기한: 4월 15일]

## 국내 정보
 ### 1. 국내 카운터
  - 제공 정보: 국내 확진자수, 국내 완치자수, 국내 사망자수, 국내 격리자수, 확진환자 현황 상위 1-5 시도명 및 퍼센트율, 누적 검사수, 누적 검사완료수, 누적 확진률, 검사중/결과양성/결과음성 카운터 및 퍼센트 등
 - 정보 출처: http://ncov.mohw.go.kr/
 
```html
http://api.corona-19.kr/korea/?serviceKey=APIKey
```
#### ※ 요청변수
|parameter|항목설명|요청 예제|
|---|---|--|
|serviceKey|API 인증키|http://api.corona-19.kr/korea/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|

#### ※ 응답내용
|항목명(영어)|항목명(한글)|비고|샘플데이터|
|---|---|--|--|
|resultCode|응답코드|정상(0) / 권한이 없거나 잘못된 키(401)|0|
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
|recoveredPercentage|국내 완치율|단위: 퍼센트|63.13|
|deathPercentage|국내 사망률|단위: 퍼센트|1.79|
|checkingCounter|국내 검사중|단위: 명|19,571|
|checkingPercentage|국내 검사중|단위: 퍼센트|4.2|
|caseCounter|국내 검사결과 양성|단위: 명|10,237|
|casePercentage|국내 검사결과 양성|단위: 퍼센트|2.2|
|notcaseCount|국내 검사결과 음성|단위: 명|431,425|
|notcasePercentage|국내 검사결과 음성|단위: 퍼센트|93.5|
|TotalChecking|총 검사완료 수|단위: 명|461,233|
|TodayRecovered|오늘 하루 완치자수|단위: 명|135|
|updateTime|정보 업데이트 기준|00시정보로 오전10시경 자동 업데이트 됩니다.|코로나바이러스감염증-19 국내 발생현황 (4.5. 00시 기준)|
|resultMessage|API 처리 결과|정상처리: (정상 처리되었습니다.) / 오류(권한이 없거나 잘못된 키 입니다. \"github.com\/dhlife09\/Corona-19-API\"에 방문하세요.)|정상 처리되었습니다.|

※ JSON 샘플 응답(전문)
- [https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json](https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json)

 
---

 ### 2. 시도별 발생동향
  - 제공 정보: 전일대비 확진환자 증감, 확진환자수, 격리해제수, 사망자수, 발생률 등
 - 정보 출처: http://ncov.mohw.go.kr/
 
```html
http://api.corona-19.kr/korea/country/?serviceKey=APIKey
```
※ 요청변수
|parameter|항목설명|예제|
|---|---|--|
|serviceKey|API 인증키|http://api.corona-19.kr/korea/country/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|

#### ※ 규칙
data{num1}_{num2}
 - num1: 지역 코드로 0(합계)~18(검역)까지
 - num2: 0(지역명(항목명)), 1(신규확진수), 2(확진환자수), 3(완치자수), 4(사망자수), 5(발생룰)

#### ※ 응답내용
|항목명(영어)|항목명(한글)|비고|샘플데이터|
|---|---|--|--|
|resultCode|응답코드|정상(0) / 권한이 없거나 잘못된 키(401)|0|
|data0_0|지역명(항목명)|규칙확인([https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B7%9C%EC%B9%99](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B7%9C%EC%B9%99))|합계|
|data0_1|신규확진수|규칙학인|47|
|data0_2|확진환자수|규칙확인|10284|
|data0_3|완치자수|규칙확인|6598|
|data0_4|사망자수|규칙확인|186|
|data0_5|발생률|규칙확인|19.84|
|data1_0|지역명(항목명)|규칙확인|서울|
|data1_1|신규확진수|규칙확인|11|
|data1_2|확진환자수|규칙확인|563|
|data1_3|완치자수|규칙확인|151|
|data1_4|사망자수|규칙확인|0|
|data1_5|발생률|규칙확인|5.78|
|규칙생략|규칙생략|상단에 있는 규칙을 확인해주세요. 0~18까지 구성이 동일합니다.|규칙생략|
|data18_3|완치자수|규칙확인|2|
|data18_4|사망자수|규칙확인|0|
|data18_5|발생률|규칙확인|-|
|resultMessage|정상처리: (정상 처리되었습니다.) / 오류(권한이 없거나 잘못된 키 입니다. \"github.com\/dhlife09\/Corona-19-API\"에 방문하세요.)|정상 처리되었습니다.|

※ JSON 샘플 응답(전문)
- [https://github.com/dhlife09/Corona-19-API/blob/master/2_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json](https://github.com/dhlife09/Corona-19-API/blob/master/2_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json)


## 전세계 정보(준비중)
### 1. 전세계 카운터
- 제공 정보: 전세계 확진자수, 전세계 완치자수, 전세계 사망자수, 전세계 현재 환자수
- 정보 출처: https://www.worldometers.info/coronavirus/index.php


## 굿바이코로나 API 이용약관
- 굿바이코로나에서 제공하는 코로나19 관련 API는 누구나 무료로 제한없이 사용할 수 있습니다.
- 불법 서비스에서의 API 이용은 금지됩니다.
- 서비스에 부하를 주는 행위는 금지됩니다.
- 일회용 이메일과 같은 비정상적인 이메일 주소를 이용한 API 키 발급을 금지합니다.
- 키를 받으신 이메일 주소로 서비스 중요 공지사항 등은 발송될 수 있습니다.
