<?php
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $iphone = (strpos($agent, 'iphone')) ? true : false;
    $ipad = (strpos($agent, 'ipad')) ? true : false;
    $android = (strpos($agent, 'android')) ? true : false;
    if($iphone || $ipad)
    {
        echo  <<<END
        <script>window.location.href='./ios.php'</script>
END;
    }
    if($android){
        echo "<script>window.location.href='./android.php'</script>";
    }else{
        echo "<script>window.location.href='./desktop.html'</script>";
    }
?>
