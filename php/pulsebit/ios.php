<?php
  function is_weixin(){ 
    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
      return true;
    }
    return false;
  }

  function weixin(){
    echo '<div style="background-color:#d9edf7;" class="container content">
  <h2 style="font-color:#4f87a2;">温馨提示</h2>
  请点击微信右上角按钮，然后在弹出的菜单中，点击在浏览器中打开，即可安装。
</div>';
  }
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pulsebit O2 APP for iOs</title>

  <link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.css">

  <!-- Bootstrap -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="row-fluid" style="margin:20px 0 0 0;">
    <!-- header -->
    <div style="text-align:center;" class="container content">
      <img src="imgs/viatom-logo.png" alt="viatom"></div>

    <hr class="devider devider-dotted">
    
    <!-- Wechat? -->
    <?php
      if (is_weixin()) {
        weixin();
      }
      ?>


    <div class="container content">
      <div class="view row">
        <div class="span12" style="text-align:center;">
          <h1>Pulsebit O2 App for iOS</h1><br>
          <img src="imgs/icon350x350.jpeg" width="120px" height="120px">
        </div>
      </div>    
    </div>

    <hr class="devider devider-dotted">

    <!-- iOS & Android -->
    <div id="" class="view row margin-bottom-30">    
      <div class="col-md-8 col-md-offset-2"> 
        <div class="col-md-6" style="border-right:1px solid #ccc;">
          <div class="row text-center">
            <div class="margin-bottom-20">
              <i class="fa fa-apple fa-3x" aria-hidden="true"></i><br>
              <br>
              <a href="https://itunes.apple.com/us/app/checkme-mobile/id888642112?mt=8" class="label label-info" style="font-size: 16px">
              <i class="fa fa-download" aria-hidden="true"></i> 下载iOS版</a>
              <br>
              <div style="margin:5px 0 0 0;">适用于iOS设备</div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2" style="word-break:break-all;">
          <div class="tag-box tag-box-v6 margin-bottom-40">
            <h2>更新说明</h2>
              1.更新邀请好友方式<br>
              2.修正少量bug</div>
        </div>
      </div> -->
  
    </div>
  </div>
</body>
</html>