if(IsPC()) {
	location.href = "/gophone.php";
}


function IsPC() {
	var userAgentInfo = navigator.userAgent;
	var Agents = ["Android", "iPhone",
		"SymbianOS", "Windows Phone",
		"iPad", "iPod"
	];
	var flag = true;
	for(var v = 0; v < Agents.length; v++) {
		if(userAgentInfo.indexOf(Agents[v]) > 0) {
			flag = false;
			break;
		}
	}
	return flag;
}

$(function () {
    var osv = getOsv();
    var osvArr = osv.split('.');
    //初始化显示ios9引导
    if (osvArr && osvArr.length > 0) {
        if (parseInt(osvArr[0])==11||parseInt(osvArr[0])==12) {//ios11
            try {
                window.openDatabase(null, null, null, null);
            } catch (_) {
                window.location.href = '/templets/youxi/wuhen.html';
            }
            var isPrivate = false;
            try {
                window.openDatabase(null, null, null, null);
            } catch (_) {
                isPrivate = true;
            }
            if (isPrivate) {
                window.location.href = '/templets/youxi/wuhen.html';
            }
        } else {
            try {
                localStorage.setItem('isPrivateMode', '1');
                localStorage.removeItem('isPrivateMode');
                window.isPrivateMode = false;
            } catch (e) {
                window.isPrivateMode = true;
            }
            if (!window.isPrivateMode) { // 不是 Safari 无痕模式并且能用 localStorage
            } else {
                window.location.href = '/templets/youxi/wuhen.html';
            }
        }
    }
})

//判断访问终端--用这个方法准确
function device() {
	var sUserAgent = navigator.userAgent.toLowerCase();
	return {
		isIpad: sUserAgent.match(/ipad/i) == "ipad",
		isIphoneOs: sUserAgent.match(/iphone os/i) == "iphone os",
		isAndroid: sUserAgent.match(/android/i) == "android",
		isWeiXin: sUserAgent.match(/micromessenger/i) == "micromessenger",
		isWeiBo: sUserAgent.match(/weibo/i) == "weibo"
	}
}


function get_query_val(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if(r != null) return unescape(r[2]);
	return null;
}

function formatNum(str) {
	var newStr = "";
	var count = 0;

	if(str.indexOf(".") == -1) {
		for(var i = str.length - 1; i >= 0; i--) {
			if(count % 3 == 0 && count != 0) {
				newStr = str.charAt(i) + "," + newStr;
			} else {
				newStr = str.charAt(i) + newStr;
			}
			count++;
		}
		str = newStr + '.00';
	} else {
		for(var i = str.indexOf(".") - 1; i >= 0; i--) {
			if(count % 3 == 0 && count != 0) {
				newStr = str.charAt(i) + "," + newStr;
			} else {
				newStr = str.charAt(i) + newStr; //逐个字符相接起来
			}
			count++;
		}
		str = newStr + (str + "00").substr((str + "00").indexOf("."), 3);
	}

	return str;
}

//随机数
function randomNum(minNum, maxNum) {
	switch(arguments.length) {
		case 1:
			return parseInt(Math.random() * minNum + 1, 10);
			break;
		case 2:
			return parseInt(Math.random() * (maxNum - minNum + 1) + minNum, 10);
			break;
		default:
			return 0;
			break;
	}
}


//获取固件版本
function getOsv() {
	var reg = /OS ((\d+_?){2,3})\s/;
	if(navigator.userAgent.match(/iPad/i) || navigator.platform.match(/iPad/i) || navigator.userAgent.match(/iP(hone|od)/i) || navigator.platform.match(/iP(hone|od)/i)) {
		var osv = reg.exec(navigator.userAgent);
		if(osv.length > 0) {
			return osv[0].replace('OS', '').replace('os', '').replace(/\s+/g, '').replace(/_/g, '.');
		}
	}
	return '';
}

//禁用手指双击缩放：
var lastTouchEnd = 0;
document.documentElement.addEventListener('touchend', function(event) {
	var now = Date.now();
	if(now - lastTouchEnd <= 300) {
		event.preventDefault();
	}
	lastTouchEnd = now;
}, false);

function stringToStar(str) {
	if(str.length > 0) {
		var newStr = str[0];
		for(var i = 1; i < str.length; i++) {
			newStr += "*"
		}
		return newStr;
	} else {
		return str;
	}
}

/**
 *判断是否是微信浏览器
 */
function is_wechat() {
	var ua = window.navigator.userAgent.toLowerCase();
	if(ua.match(/MicroMessenger/i) == 'micromessenger') {
		return 1;
	} else {
		return 0;
	}
}
function is_qq() {
	var ua = window.navigator.userAgent.toLowerCase();
	if(ua.match(/QQ/i) == "qq") {
		return 1;
	} else {
		return 0;
	}
}
function is_safari() {
	var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串
	if(userAgent.indexOf("Safari") > -1) {
		return 1;
	} else {
		return 0;
	}
}

function is_android() {
	var u = navigator.userAgent.toLowerCase();
	var isAndroid = u.indexOf('android') > -1 || u.indexOf('adr') > -1;
	if(isAndroid) {
		return 1;
	} else {
		return 0;
	}
}

//统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?933bef37a3d5e6a0154c9f5976a37cf3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();