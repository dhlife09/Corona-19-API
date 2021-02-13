<!--

굿바이코로나 Corona-19-API 파싱예제 PHP 샘플 코드입니다.

해당 코드를 사용하기 위해서는 Corona-19-API 서비스키(API키)를 발급받은 후 입력란에 key를 입력하거나 $key에 값을 대입해주세요.
https://api.corona-19.kr/
https://github.com/dhlife09/Corona-19-API
Copyright © dhlife09. All rights reserved.

https://sample2.corona-19.kr/ 에서 본 소스코드를 사용해볼 수 있습니다.

-->

<?php
  $key = '_____여기에_API_KEY_를_넣어주세요_____';

  if ($key != '_____여기에_API_KEY_를_넣어주세요_____') {
    $data_str1 = file_get_contents('https://api.corona-19.kr/korea/?serviceKey='. $key);
    $json1 = json_decode($data_str1, true);

    if ($json1['resultCode'] != '401') {
      $TotalCase = $json1['TotalCase'];
      $TotalRecovered = $json1['TotalRecovered'];
      $TotalDeath = $json1['TotalDeath'];
      $NowCase = $json1['NowCase'];
      $updateTime = $json1['updateTime'];
    } else {
      echo 'https://api.corona-19.kr/ 에서 API 키를 발급하신 후 php 15번째 줄에 넣어주세요.<br>넣었는데도 해당 메시지가 뜬다면 API 키가 잘못된 것이므로 확인바랍니다.';
    }
    
  } else {
      echo 'https://api.corona-19.kr/ 에서 API 키를 발급하신 후 php 15번째 줄에 넣어주세요.<br>넣었는데도 해당 메시지가 뜬다면 API 키가 잘못된 것이므로 확인바랍니다.';
  }  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>COVID-19-KR</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">COVID-19-KR</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="https://daum.ml/goodbyecorona">굿바이코로나</a>
    <a class="p-2 text-dark" href="https://daum.ml/covid19api">Corona-19-API</a>
    <a class="p-2 text-dark" href="https://daum.ml/covid19apidocs">API 문서</a>
  </nav>
</header>

<main class="container">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">COVID-19-KR</h1>
    <p class="lead">코로나바이러스감염증(코로나19)은 새롭게 발견된 코로나바이러스로 인해 발생하는 감염 질환입니다.
코로나19에 감염되면 대부분 경증에서 중증 수준의 증상을 보이며 특별한 치료 없이도 질환으로부터 회복합니다. 현재 <?php echo $updateTime; ?> 을 확인하고 있습니다.</p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">국내 확진자</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?php echo $TotalCase; ?> <small class="text-muted">명</small></h1>
      </div>
    </div>
  </div>
    <div class="col">
      <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">국내 완치자</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?php echo $TotalRecovered; ?> <small class="text-muted">명</small></h1>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="card mb-3 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 fw-normal">국내 사망자</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><?php echo $TotalDeath; ?> <small class="text-muted">명</small></h1>
      </div>
    </div>
    </div>
</div>
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Cool stuff</a></li>
          <li><a class="link-secondary" href="#">Random feature</a></li>
          <li><a class="link-secondary" href="#">Team feature</a></li>
          <li><a class="link-secondary" href="#">Stuff for developers</a></li>
          <li><a class="link-secondary" href="#">Another one</a></li>
          <li><a class="link-secondary" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Resource</a></li>
          <li><a class="link-secondary" href="#">Resource name</a></li>
          <li><a class="link-secondary" href="#">Another resource</a></li>
          <li><a class="link-secondary" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Team</a></li>
          <li><a class="link-secondary" href="#">Locations</a></li>
          <li><a class="link-secondary" href="#">Privacy</a></li>
          <li><a class="link-secondary" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</main>


    
  </body>
</html>

