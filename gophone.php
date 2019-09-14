<!DOCTYPE html>
<html class="um landscape min-width-240px min-width-320px min-width-480px min-width-768px min-width-1024px">
<head>
    <title>手机打开该页面</title>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <link rel="apple-touch-icon" href="/images/wjj.png" type="image/png">
    <link rel="shortcut icon" href="/images/wjj.png" type="image/png"> 
</head>
<body style="text-align: center;">
<img src="/images/shoujifangwen.png" style="margin-top: 100px;">
<img src="/images/wwwshikewan.png" style="position: relative;width: 100px;height: auto;right: 234px;bottom: 150px;">
<script>
    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone",
            "SymbianOS", "Windows Phone",
            "iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
    var flag = IsPC();
    if(!flag){
        location.href="/";
    }
</script>
</body>
</html>