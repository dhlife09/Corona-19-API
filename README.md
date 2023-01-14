# [JSON] Corona-19-API

![image](https://user-images.githubusercontent.com/22024308/108588118-dc1d5600-739a-11eb-9a11-a39739e38ae3.png)

굿바이코로나 Corona-19-API 서비스는 코로나바이러스감염증-19 관련 JSON API 서비스를 무제한 무료로 제공합니다.

- [24시간 운영](https://stats.uptimerobot.com/LvZ47hP5ZM)
- 빠른 호출
- API 호출 수 제한 없음
- 100% 무료제공
- [공식 자료 사용](https://github.com/dhlife09/Corona-19-API/blob/master/docs/source.md)
- CORS 지원
- [공지사항 & 문의](https://github.com/dhlife09/Corona-19-API/discussions)
- **[이용약관](https://github.com/dhlife09/Corona-19-API/blob/master/docs/terms.md)과 [개인정보처리방침](https://github.com/dhlife09/Corona-19-API/blob/master/docs/privacy.md)을 꼭 확인해 주세요!**


## 👨‍💻 목차
- [서비스키 발급](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EC%84%9C%EB%B9%84%EC%8A%A4%ED%82%A4-%EB%B0%9C%EA%B8%89)
- [국내 정보](https://github.com/dhlife09/Corona-19-API/blob/master/README.md#-%EA%B5%AD%EB%82%B4-%EC%A0%95%EB%B3%B4)
- [공통 오류메시지 설명](https://github.com/dhlife09/Corona-19-API/blob/master/docs/errorMessage.md)
- [굿바이코로나 Corona-19-API 이용약관](https://github.com/dhlife09/Corona-19-API/blob/master/docs/terms.md)
- [굿바이코로나 Corona-19-API 개인정보처리방침](https://github.com/dhlife09/Corona-19-API/blob/master/docs/privacy.md)
- [데이터 업데이트 시간(KST)](https://github.com/dhlife09/Corona-19-API/blob/master/docs/updateTime.md)
- [데이터 출처](https://github.com/dhlife09/Corona-19-API/blob/master/docs/source.md)
- [Thanks ❤️](https://github.com/dhlife09/Corona-19-API/blob/master/docs/thanks.md)

## 🔐 서비스키 발급
### 키 발급
- https://api.corona-19.kr 에 방문해서 이메일 주소, 사용 목적을 입력하신 후 "API 키 발급하기" 버튼을 눌러주세요. 
- 버튼을 누르면 즉시 메일로 API 키가 발송됩니다.
- 메일 관련 질문이 있으신 경우, [여기](https://github.com/dhlife09/Corona-19-API/blob/master/docs/QnA_email.md)에서 Q&A를 확인해 주세요.

## ✔ 국내 정보
 - 제공 정보: 각 API의 version을 클릭하면 자세한 정보를 확인할 수 있습니다.
 - [정보 출처 확인](https://github.com/dhlife09/Corona-19-API/blob/master/docs/source.md)
 - [데이터 동기화 시간 확인](https://github.com/dhlife09/Corona-19-API/blob/master/docs/updateTime.md)
 - API명에 bold 처리되어 있는 API 사용을 권장합니다. (최신 버전)

|API|version|description|example|
|--|---|---|--|
|**국내 전체(recommended)**|[v2.1](https://github.com/dhlife09/Corona-19-API/blob/master/API_DOC_v2.1_%EA%B5%AD%EB%82%B4%EC%A0%84%EC%B2%B4.md)|국내 및 시도별 코로나19 감염 정보 제공|Request URL - https://api.corona-19.kr/korea/?serviceKey={API_KEY}<br><br>Response Content - [SAMPLE_v2.1_국내전체.json](https://github.com/dhlife09/Corona-19-API/blob/master/sample/response/SAMPLE_v2.1_%EA%B5%AD%EB%82%B4%EC%A0%84%EC%B2%B4.json)|
|**국내 예방접종현황**|[v1.0](https://github.com/dhlife09/Corona-19-API/blob/master/API_DOC_1.0_%EC%98%88%EB%B0%A9%EC%A0%91%EC%A2%85%ED%98%84%ED%99%A9.md)|국내 시도별 예방접종현황(1, 2, 3차 - 전체, 신규, 기존) 데이터 제공<br><br>※ 2023년 1월 14일 API가 복구되었습니다.|Request URL - https://api.corona-19.kr/korea/vaccine/?serviceKey={API_KEY}<br><br>Response Content - [SAMPLE_v1.0_예방접종현황.json](https://github.com/dhlife09/Corona-19-API/blob/master/sample/response/SAMPLE_v1.0_%EC%98%88%EB%B0%A9%EC%A0%91%EC%A2%85%ED%98%84%ED%99%A9.json)|
|**국내 전체**|[v2.0_beta](https://github.com/dhlife09/Corona-19-API/blob/master/API_DOC_v2.1_%EA%B5%AD%EB%82%B4%EC%A0%84%EC%B2%B4.md)|베타 버전으로 제공되는 항목이 변경될 수 있습니다.|Request URL - https://api.corona-19.kr/korea/beta/?serviceKey={API_KEY}<br><br>Response Content - [SAMPLE_vBETA.json](https://github.com/dhlife09/Corona-19-API/blob/master/sample/response/SAMPLE_vBETA.json)|
|시도별 발생동향(deprecated)|[v2.0](https://github.com/dhlife09/Corona-19-API/blob/master/API_DOC_v2.0_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5.md)|각 시도별 전일대비 확진환자 증감, 확진환자수, 격리해제수, 사망자수, 발생률 등의 정보 제공|Request URL - https://api.corona-19.kr/korea/country/new/?serviceKey={API_KEY}<br><br>Response Content - [SAMPLE_v2.0_시도별_발생동향.json](https://github.com/dhlife09/Corona-19-API/blob/master/sample/response/SAMPLE_v2.0_%EC%8B%9C%EB%8F%84%EB%B3%84_%EB%B0%9C%EC%83%9D%EB%8F%99%ED%96%A5.json)|


---
```
Copyright 2020-2023 dhlife09(Goodbye-Corona) All Rights Reserved.

본 서비스에서 제공하는 정보는 공식 자료로 사용되기에 적합하지 않습니다.
서비스 이용 전 반드시 이용약관과 개인정보처리방침을 확인하시기 바랍니다.
```
