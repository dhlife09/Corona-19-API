# ※ 시도별 발생동향 Response

```
version 1.1 (API Update: 21-11-19 & Document Update: 21-11-19)

** 프로그래밍 지식이 부족할 때 제작해 제공되는 Type이 Int나 Float가 아닌 String으로 제공됩니다. 신규 API에서는 해당 문제가 해결되었으므로 참고 부탁드립니다.
```

|Key|Type|항목명(한글)|Description|Sample Data|
|---|--|---|--|--|
|resultCode|String|응답코드|정상(0) / 기타 메시지(오류)는 하단의 공통 오류메시지 참고|0|
|resultMessage|String|정상처리: (정상 처리되었습니다.) / 오류(Unauthorized)|정상 처리되었습니다.|
|countryName|String|시도명(지역명)||서울|
|newCase|String|신규확진환자수|전일대비|2|
|totalCase|String|확진환자수||619|
|recovered|String|완치자수||250|
|death|String|사망자||2|
|percentage|String|발생률|단위: %|6.36|
|newFcase|String|전일대비증감-해외유입||1|
|newCcase|String|전일대비증감-지역발생||1|