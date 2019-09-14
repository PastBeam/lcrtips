window.onpageshow = function(event) {
	if(event.persisted) {
		window.location.reload()
	}
		
	//底部下载助手相关
	$(".index-bottom-guide-button-down").on("click", function() {
		sessionStorage.setItem('showBottom', 'down');
		$(".index-bottom-guide-fa").hide();
		if(is_safari()) {
			$(".add-to-desk-mask,.add-to-desk").show();
			$("body").addClass("no-scroll");
			$(".add-to-desk-mask").addClass("scroll-y");
		} else if(is_wechat()) {
			$(".open-safari").show();
		}
	});
	$(".index-bottom-guide-button-close").on("click", function() {
		sessionStorage.setItem('showBottom', 'close');
		$(".index-bottom-guide-fa").hide();
	});
	var showBottom = sessionStorage.getItem('showBottom');
	if(showBottom) {
		$(".index-bottom-guide-fa").hide();
	} else {
		if(is_safari()) {
				$(".index-bottom-guide-fa").show();
		}else if(is_android()){
			$(".index-bottom-guide-fa").hide();
		}
	}
	$(".add-desk,.open-safari").on("click", function() {
		$(".add-desk").hide();
		$(".open-safari").hide();
	});
	
	if(localStorage.getItem('firstCome') != 1 ) {
			$(".guide-index").show();
			$(".hongbao-button").hide();
			$(".index-bottom-guide-fa").hide();
			}else{
				$(".hongbao-button").show();				
	 }	
	$('.guide-index').on('click', function () {
        localStorage.setItem('firstCome', 1);
        $('.guide-index').hide();
		$(".hongbao-button").show();
	    $(".index-bottom-guide-fa").show();
    })
	
	getBannerList();
	addDesk();
	getWeather();

	$(".hongbao-button").click(function() {
		$(".hongbao-button").hide();
		$(".get-hongbao").show();
		$(".index-bottom-guide-fa").hide();
	});
	$(".hongbao-close").click(function() {
		$(".hongbao-button").show();
		$(".get-hongbao").hide();
		var showBottom2 = localStorage.getItem('showBottom') || sessionStorage.getItem('showBottom');
		if(showBottom2) {
			$(".index-bottom-guide-fa").hide();
		} else {
			if(is_safari()) {
					$(".index-bottom-guide-fa").show();
			}if(is_android()){
				$(".index-bottom-guide-fa").hide();
			}
		}
	});
	
	
	if(localStorage.getItem("videobuttonclose")){
		$(".video-button").hide();
	}else{
		$(".video-button").show();
	}
	$(".video-button").click(function() {
		$(".video").show();
		var html = '<video id="video" controls="controls" autoplay x-webkit-airplay="true" webkit-playsinline="true" playsinline="true"' +
		'                       width="100%" height="100%"' +
		'                       poster="/images/video-out.png">' +
		'                    Your browser does not support the video tag.' +
		'                    <source src="http://gslb.ins.miaopai.com/stream/ins_5DboNTcng5ZrINNdck1ZXYc7FAWdHWek.mp4"' +
		'                            type="video/mp4">' +
		'                    <source src="http://gslb.ins.miaopai.com/stream/ins_5DboNTcng5ZrINNdck1ZXYc7FAWdHWek.mp4"' +
		'                            type="video/ogg">' +
		'                </video>'
	$('.video-out').html(html);
	});
	$(".video").click(function() {
		$(".video").hide();
		var video = document.getElementById("video");
        video.pause();
        video.currentTime = 0;
	});
	$(".video-button-close").click(function(e) {
		e.stopPropagation();
		$(".video-button").hide();
		localStorage.setItem("videobuttonclose","true");
	});
	
	
	$(".open-ali").click(function() {
		var share_schema = "alipay://";
		location.href = share_schema;
	})
	$(".shareHongbao").click(function() {
		clipboardHb()
	})
	
	$(".add-back").click(function() {
		$(".add-to-desk-mask,.add-to-desk").hide();
		$("body").removeClass("no-scroll");
	})
	if(is_android()){
		$(".index-bottom-guide-fa").hide();
	}
	
	
}

//轮播图列表以及试玩人数
function getBannerList() {
			var mySwiper = new Swiper('.swiper-container', {
				loop: true,
				pagination: '.swiper-pagination',
				autoplay: 2500,
			});
			//2
			var myDate = new Date();
			var xiaoshi = myDate.getHours();
			var fenzhong = myDate.getMinutes(); 
			var miaozhong = myDate.getSeconds(); 
			var renshu = 30000+xiaoshi*27+fenzhong*9+miaozhong*3
			$('#checkPeopleNum').html(renshu);
			//3			
}

//添加到桌面相关的信息
function addDesk() {
			$('#enterImg').attr("src", "/images/wjj.png");
			$('#enterTitle').html("<?=$public_r[sitename]?>");
			$('#enterDiscribe').html("添加入口到桌面，永不走丢");
			$('.add-icon-img').attr("src", "/images/wjj.png");
			var _url = window.location.host;
			$('.add-link').html(_url);
			var _icon = '<link rel="apple-touch-icon" href="/images/wjj.png" type="image/png">';
			var _icon2 = '<link rel="shortcut icon" href="/images/wjj.png" type="image/png">';
			$("head").append(_icon).append(_icon2);
		
}

//复制板
function clipboardHb() {
	var clipboard = new Clipboard('.shareHongbao');
	clipboard.on('success', function(e) {
		var msg = e.trigger.getAttribute('aria-label');
		alert(msg);
		$(".mask").hide();
		$("#copydiv").hide();
		$('body').removeClass('no-scroll');
		e.clearSelection();
	});
	clipboard.on('error', function(e) {
		$(".mask").hide();
		$("#copydiv").hide();
		$('body').removeClass('no-scroll');
		e.clearSelection();
	});
}



//获取天气
function getWeather(){
	$.ajax({
		url: "/weather.php",
		contentType: "application/json",
		type: "get",
		dataType: 'json',
		success: function(res) {
			var data = res || {};
			$(".weather-city").html(data.data.city);
			$(".weather-tem").html(data.data.wendu);
		},
		error: function(res) {

		}
	});		
}

getWeather();
