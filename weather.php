<?php
if (!function_exists('gzdecode')) {
	function gzdecode($data)
	{
		return gzinflate(substr($data,10,-8));
	}
}
    function get_ip(){
        //判断服务器是否允许$_SERVER
        if(isset($_SERVER)){    
            if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
                $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
                $realip = $_SERVER['HTTP_CLIENT_IP'];
            }else{
                $realip = $_SERVER['REMOTE_ADDR'];
            }
        }else{
            //不允许就使用getenv获取  
            if(getenv("HTTP_X_FORWARDED_FOR")){
                  $realip = getenv( "HTTP_X_FORWARDED_FOR");
            }elseif(getenv("HTTP_CLIENT_IP")) {
                  $realip = getenv("HTTP_CLIENT_IP");
            }else{
                  $realip = getenv("REMOTE_ADDR");
            }
        }

        return $realip;
    }  
    
    function getIp(){
        $ip = get_ip();
        if($ip=='127.0.0.1'){
            $ip = 'myip';
        } 
        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, 'http://ip.taobao.com/service/getIpInfo.php?ip='.$ip);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        curl_multi_getcontent( $curl );
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        
        //显示获得的数据
        return json_decode($data,true);
    }
    
    function weather($chengshi){
        $url = 'http://wthrcdn.etouch.cn/weather_mini?city='.urlencode($chengshi);
        $html = file_get_contents($url);
        $jsondata = gzdecode($html);
        $data=json_decode($jsondata,true);

        $arr=array();
        $arr['chengshi']=$data['data']['city'];
		$arr['wendu']=$data['data']['wendu'];
        $dangtian=$data['data']['forecast'][0];
        $arr['tianqi']=$dangtian['type'];
        return  $jsondata;
    }
    
    $area = getIp();
    if(isset($area['data']['city'])){
        $city = $area['data']['city'];
         $weather = weather($city);
print_r($weather);
    }
	?>