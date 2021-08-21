<!--

굿바이코로나 Corona-19-API 파싱예제 PHP 샘플 코드입니다.

해당 코드를 사용하기 위해서는 Corona-19-API 서비스키(API키)를 발급받은 후 입력란에 key를 입력하거나 $key에 값을 대입해주세요.
https://api.corona-19.kr/
https://github.com/dhlife09/Corona-19-API
Copyright © dhlife09. All rights reserved.

https://corona-19-php--dhlife09.repl.co/ 에서 본 소스코드를 사용해볼 수 있습니다.

-->
<form accept-charset="utf-8" action="" method="get" name="person_info">
    <fieldset style="width: 100%;">
        <legend>Corona-19-API 키 입력</legend> API 키 : <input name="serviceKey" required="" type="text" /><br /><br /> <a href="https://api.corona-19.kr." target="_blank" rel="noopener">여기</a>에서 API 키를 무료로 발급하실 수 있습니다. <br />
        API 키가 잘못된 경우, 결과가 표시되지 않습니다.
        <br />
        
        <input type="submit" value="submit" /> <input type="reset" value="reset" /><br /><br />
    </fieldset>
</form>

<?php
  $key = $_GET['serviceKey'];
  $data_str1 = file_get_contents('http://api.corona-19.kr/korea/?serviceKey='. $key);
  $json1 = json_decode($data_str1, true);
  if ($json1['resultCode'] != null) {
    echo '국내 확진자: '. $json1['TotalCase']. "<br>";
    echo '국내 완치자: '. $json1['TotalRecovered']. "<br>";
    echo '국내 사망자: '. $json1['TotalDeath']. "<br>";
    echo '국내 치료중: '. $json1['NowCase']. "<br>";
  } else if ($key == null) {
    echo 'API 키가 입력되지 않았습니다.';
  } else {
    echo 'API 키가 잘못되었습니다.';
  }
  
?>
