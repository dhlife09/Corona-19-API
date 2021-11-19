<?php /*
굿바이코로나 Corona-19-API 파싱예제 PHP 샘플 코드입니다.
해당 코드를 사용하기 위해서는 Corona-19-API 서비스키(API키)를 발급받은 후 입력란에 key를 입력하거나 $key에 값을 대입해주세요.

https://api.corona-19.kr/
https://github.com/dhlife09/Corona-19-API
https://test2.corona-19.kr/ 에서 본 소스코드를 실행할 수 있습니다.

Copyright 2021 DevEnne&dhlife09. All rights reserved. */

$key = $_POST['apikey'];

if (!empty($key)) {
  $existKey = true;
} else {
  $existKey = false;
}

if ($existKey) {
  $data = @file_get_contents('https://api.corona-19.kr/korea/beta/?serviceKey='. $key);
  $json = json_decode($data, true);
}
?>

<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, 
  maximum-scale=1.0, minimum-scale=1.0">
    <title>Corona-19-API</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="POST" action="index.php">
            API KEY: <input type="text" name="apikey"/><br/>
            <input type="submit" name="submit"/>
    <form>
    <table class="type02">
      <tr>
        <th scope="row">API Key</th>
        <td><?php if($existKey) { echo $key; } ?>
    </td>
      </tr>
      <tr>
        <th scope="row">상태</th>
        <td>
        <?php if($existKey) { echo $json['API']['resultMessage']; } else { echo 'API 키를 입력해주세요.'; } ?>
    </td>
      </tr>
      <tr>
        <th scope="row">업데이트 시간</th>
        <td><?php if($existKey) { echo $json['API']['updateTime']; } ?></td>
      </tr>
      <tr>
        <th scope="row">국내 확진자 수</th>
        <td><?php if($existKey) { echo number_format($json['korea']['totalCnt']). "명"; } ?></td>
      </tr>
      <tr>
        <th scope="row">전일대비 확진자 수</th>
        <td><?php if($existKey) { echo '+'. number_format($json['korea']['incDec']). "명"; } ?></td>
      </tr>
      <tr>
        <th scope="row">국내 완치자 수</th>
        <td><?php if($existKey) { echo number_format($json['korea']['recCnt']). "명"; } ?></td>
      <tr>
      </tr>
        <th scope="row">국내 사망자 수</th>
        <td><?php if($existKey) { echo number_format($json['korea']['deathCnt']). "명"; } ?></td>
      </tr>
      <tr>
        <th scope="row">국내 치료중 환자 수</th>
        <td><?php if($existKey) { echo number_format($json['korea']['isolCnt']). "명"; } ?></td>
      </tr>
      <tr>
        <th scope="row">국내 코로나 발생률</th>
        <td><?php if($existKey) { echo $json['korea']['qurRate']. " %"; } ?></td>
      </tr>
    </table>

    <p> API 키가 없으신 경우, <a href = "https://api.corona-19.kr" > Corona-19-API </a> 에서 API 키를 발급해주세요. </p>
  </body>
</html>