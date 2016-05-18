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
