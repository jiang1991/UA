# UA
解决一个二维码不同手机扫描下载时跳转的问题

## 判断后跳转对应的app下载

- php

  ```php
  <?php

      $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
      $iphone = (strpos($agent, 'iphone')) ? true : false;
      $ipad = (strpos($agent, 'ipad')) ? true : false;
      $android = (strpos($agent, 'android')) ? true : false;
      if($iphone || $ipad)
      {
          echo  <<<END
          <script>window.location.href='itms-apps://itunes.apple.com/cn/app/zhong-guo-tou-zi-zhi-nan/id644856699?mt=8'</script>
  END;
      }
      if($android){
          echo "<script>window.location.href='http://www.anzhi.com/dl_app.php?s=803308'</script>";
      }
  ?>
  ```

  ​


- js

  ```javascript
  // http://viatomtech.com.cn/app/pulsebito2.php

  // https://www.zhihu.com/question/21101008


  function redirect(){
  location.href = href;
  }

  var url_parts = document.URL.split('?');
  var query = url_parts.length == 2 ? ('?' + url_parts[1]) : '';
  var href = '/';
  var ua = navigator.userAgent.toLowerCase();

  if (/iphone|ipad|ipod/.test(ua)) {
  href = 'https://itunes.apple.com/cn/app/id639087967?mt=8';
  __ga('set', 'page', '/download/ios' + query);
  __ga('send', 'pageview');
  __ga('send', 'event', 'app', 'download-via-qrcode', 'ios', {'hitCallback': redirect});
  setTimeout(redirect, 2000);
  } else if (/android/.test(ua)) {
  href = 'http://s.zhimg.com/daily/zhihu-daily-1.0.1.apk';
  __ga('set', 'page', '/download/android' + query);
  __ga('send', 'pageview');
  __ga('send', 'event', 'app', 'download-via-qrcode', 'android-local', {'hitCallback': redirect});
  setTimeout(redirect, 2000);
  } else if (/windows phone|blackberry/.test(ua)) {
  __ga('set', 'page', '/download/other' + query);
  __ga('send', 'pageview');
  alert('抱歉，暂不支持您的系统');
  location.href = '/';
  } else {
  __ga('send', 'pageview');
  location.href = '/';
  }
  })()
  ```

  ​

- viatom
\ No newline at end of file
