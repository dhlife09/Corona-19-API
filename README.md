

# [JSON] Corona-19-API

![image](https://user-images.githubusercontent.com/22024308/108588118-dc1d5600-739a-11eb-9a11-a39739e38ae3.png)

굿바이코로나 Corona-19-API 서비스는 코로나바이러스감염증-19 관련 JSON API 서비스를 무제한 무료로 제공합니다.

- 24시간 운영(업타임: https://stats.uptimerobot.com/LvZ47hP5ZM)
- 빠른 호출
- API 호출 수 제한 없음
- 100% 무료제공
- 공식 자료 사용(ncov.mohw.go.kr)
- CORS 지원

**현재 신규버전 API(BETA) 출시를 위해 작업 중 입니다. 자세한 사항은 [공지사항을](https://github.com/dhlife09/Corona-19-API/issues/50) 확인해 주세요.**


|서비스 후원|자세한 사항은 [여기](https://github.com/dhlife09/Corona-19-API/blob/master/docs/donate.md)를 확인해 주세요.|
|--|--|
|확인사항!|**[이용약관](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B5%BF%EB%B0%94%EC%9D%B4%EC%BD%94%EB%A1%9C%EB%82%98-corona-19-api-%EC%9D%B4%EC%9A%A9%EC%95%BD%EA%B4%80)과 [개인정보처리방침](https://github.com/dhlife09/Corona-19-API/blob/master/docs/privacy.md)을 꼭 확인해 주세요!**|

## 👨‍💻 목차
- [서비스키 발급](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-0-%EC%84%9C%EB%B9%84%EC%8A%A4%ED%82%A4-%EB%B0%9C%EA%B8%89)
- [국내 정보](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-%EA%B5%AD%EB%82%B4-%EC%A0%95%EB%B3%B4)
	- [국내 카운터](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-1-%EA%B5%AD%EB%82%B4-%EC%B9%B4%EC%9A%B4%ED%84%B0)
	- [시도별 발생동향](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-2-%EC%8B%9C%EB%8F%84%EB%B3%84-%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5)
	- [공통 오류메시지 설명](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-1-3-%EA%B3%B5%ED%86%B5-%EC%98%A4%EB%A5%98%EB%A9%94%EC%8B%9C%EC%A7%80-%EC%84%A4%EB%AA%85)
- [굿바이코로나 Corona-19-API 이용약관](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B5%BF%EB%B0%94%EC%9D%B4%EC%BD%94%EB%A1%9C%EB%82%98-corona-19-api-%EC%9D%B4%EC%9A%A9%EC%95%BD%EA%B4%80)
- [굿바이코로나 Corona-19-API 개인정보처리방침](https://github.com/dhlife09/Corona-19-API/blob/master/docs/privacy.md)
## 🔐 0. 서비스키 발급
### 1. 키 발급
- https://api.corona-19.kr/ 에 방문해서 이메일 주소, 사용 목적을 입력하신 후 "API 키 발급하기" 버튼을 눌러주세요. (주의사항: [일부 이메일은 사용 불가](https://github.com/dhlife09/Corona-19-API/blob/master/docs/blockedDomains.md))
- 버튼을 누르면 즉시 메일로 API 키가 발송됩니다.

## ✔ 1. 국내 정보
### 📖 1-0. 국내 정보 API 사용 예
(삭제)

 ### 📙 1-1. 국내 카운터
  - 제공 정보: 국내 확진자수, 국내 완치자수, 국내 사망자수, 국내 격리자수, 확진환자 현황 상위 1-5 시도명 및 퍼센트율, 검사중/결과양성/결과음성 카운터 및 퍼센트 등
 - 정보 출처: http://ncov.mohw.go.kr/
 - 데이터 동기화 시간: [확인하기](https://github.com/dhlife09/Corona-19-API/blob/master/docs/updateTime.md)
 
```html
https://api.corona-19.kr/korea/?serviceKey=APIKey
```
#### ※ 요청변수 [GET]
|version|parameter|항목설명|요청 예제|
|--|---|---|--|
|v1|serviceKey|API 인증키|https://api.corona-19.kr/korea/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|

#### ※ 응답내용
|항목명(영어)|항목명(한글)|비고|샘플데이터|
|---|---|--|--|
|resultCode|응답코드|정상(0) / 기타 메시지(오류)는 하단의 공통 오류메시지 참고|0|
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
|caseCount|국내 검사결과 양성|단위: 명|10,237|
|casePercentage|국내 검사결과 양성|단위: 퍼센트|2.2|
|notcaseCount|국내 검사결과 음성|단위: 명|431,425|
|notcasePercentage|국내 검사결과 음성|단위: 퍼센트|93.5|
|TotalChecking|총 검사완료 수|단위: 명|461,233|
|TodayRecovered|오늘 하루 완치자수|단위: 명|135|
|TodayDeath|오늘 하루 사망자수|단위: 명|2|
|TotalCaseBefore|전날 대비 환자수|단위: 명|-61|
|source|데이터 수집 방법|AUTO_BOT(자동수집), GOODBYE_CORONA(수동적으로 추가되거나 보완된 데이터)|AUTO_BOT|
|updateTime|정보 업데이트 기준|00시 정보로 오전 10시경 자동으로 업데이트 됩니다.|코로나바이러스감염증-19 국내 발생현황 (4.5. 00시 기준)|
|resultMessage|API 처리 결과|정상처리: (정상 처리되었습니다.) / 오류(Unauthorized)|정상 처리되었습니다.|

※ JSON 샘플 응답(전문)
- [https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json](https://github.com/dhlife09/Corona-19-API/blob/master/1_%EA%B5%AD%EB%82%B4%EC%B9%B4%EC%9A%B4%ED%84%B0_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json)

 
---

 ### 📙 1-2. 시도별 발생동향
  - 제공 정보: 전일대비 확진환자 증감, 확진환자수, 격리해제수, 사망자수, 발생률 등
 - 정보 출처: http://ncov.mohw.go.kr/
 - 데이터 동기화 시간: 요청 즉시(개선 중)
 
```html
https://api.corona-19.kr/korea/country/new/?serviceKey=APIKey
```
※ 요청변수 [GET] - v2부터는 데이터가 배열 형태로 제공됩니다.
|version|parameter|항목설명|예제|
|--|---|---|--|
|v1|serviceKey|API 인증키|https://api.corona-19.kr/korea/country/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|
|v2(recommended)|serviceKey|API 인증키|http://api.corona-19.kr/korea/country/new/?serviceKey=fff098a39e0a841ab72e1d27bdee9b517|

#### ※ 응답내용
|항목명(영어)|항목명(한글)|비고|샘플데이터|
|---|---|--|--|
|resultCode|응답코드|정상(0) / 기타 메시지(오류)는 하단의 공통 오류메시지 참고|0|
|resultMessage|정상처리: (정상 처리되었습니다.) / 오류(Unauthorized)|정상 처리되었습니다.|
|countryName|시도명(지역명)||서울|
|newCase|신규확진환자수|전일대비|2|
|totalCase|확진환자수||619|
|recovered|완치자수||250|
|death|사망자||2|
|percentage|발생률|단위: %|6.36|
|newFcase|전일대비증감-해외유입||1|
|newCcase|전일대비증감-지역발생||1|

※ JSON 샘플 응답(전문)
- [https://github.com/dhlife09/Corona-19-API/blob/master/2_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json](https://github.com/dhlife09/Corona-19-API/blob/master/2_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5_%EC%9D%91%EB%8B%B5%EC%83%98%ED%94%8C.json)

---

 ### 📙 1-3. 공통 오류메시지 설명
 
|HTTP 응답코드|오류메시지|설명|
|--|--|--|
|401|serviceKey가 잘못되었습니다. 대소문자, 띄어쓰기를 모두 확인하므로 정확한지 확인하세요. (The serviceKey is invalid. Both upper and lower case letters and spaces are checked, so make sure they are correct.)|GET 요청으로 보낸 serviceKey가 잘못된 상태입니다. 대소문자를 구분하며 띄어쓰기가 있지는 않은지 확인해 주세요. 메일로 발송된 API 키를 정확하게 입력하셔야 합니다.|
|403|차단된 serviceKey로 이용할 수 없습니다. (It cannot be used with a blocked serviceKey.)|이용 약관을 위반해 차단된 API 키 입니다. 차단된 경우 서비스 이용이 불가능 합니다.|
|403|서비스 종료로 구버전 시도별 발생동향 API는 사용할 수 없습니다.|더 이상 서비스를 제공하지 않으므로 상위 버전을 사용하시기 바랍니다.|
|405|Not Allowed|GET 외의 방식으로는 서비스를 사용할 수 없습니다. Method를 다시 확인하세요. (You cannot use the service in any way other than GET. Check the Method again.)|
|500|서버 내부 오류(오류명)가 발생했습니다. 관리자에게 문의하세요. (A server internal error (Error name) has occurred. Please contact your administrator.)|서버 내부 오류가 발생한 상태입니다. 관리자에게 문의해 주세요.


## 📣 굿바이코로나 Corona-19-API 이용약관
- 본 서비스는 국가 및 어느 단체에서 운영하는 서비스가 아닙니다.
- 본 서비스는 [업타임](https://stats.uptimerobot.com/LvZ47hP5ZM) 100%를 위해 노력하지만 이를 보증하지는 않습니다.
- 본 서비스는 데이터의 정확성을 보장하지 않습니다. (Original Page의 구조 변경 등으로 발생할 수 있는 데이터 오류 등을 책임지지 않음.)
- 굿바이코로나에서 제공하는 코로나19 관련 API는 비상업적 조건으로 무료로 사용할 수 있습니다. (본 서비스를 이용해 프로그램 또는 서비스를 제작하여 판매할 수 없습니다. 그 외 상업적 목적으로도 사용할 수 없습니다.)
- 불법 서비스에서의 API 이용은 금지됩니다.
- 서비스에 부하를 주는 행위는 금지됩니다.
- 키를 받으신 이메일 주소로 서비스 중요 공지사항 등이 발송될 수 있습니다.
- 불법적으로 본 서비스를 해킹/변조하여 이용하는경우 법적 처벌을 받을 수 있습니다.
- 이용약관을 위반할경우 발급하신 KEY가 차단될 수 있습니다.



