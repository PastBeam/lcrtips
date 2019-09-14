window.onpageshow = function(event){
	if (event.persisted) {
        window.location.reload() 
    }
	$(".back").on("click", function() {
		history.back();
	});	
	if(is_qq()||is_wechat()){
		$(".plat-share").hide();
	}
//	$(".plat-share").click(function(){
//		$(".sharediv").show();
//	});
//	$(".sharediv-close").click(function(){
//		$(".sharediv").hide();
//	});

    sharePopup();
	showGuide();
	aboutPhoto();
}

//点击右上角分享按钮
function sharePopup() {
    $('#mengban1').bind("touchmove", function (e) {
        (".mask").hide();
        $(".copydiv").hide();
        $('body').removeClass('no-scroll');
        e.preventDefault();
    });

    $('#mengban1').click(function (e) {
        (".mask").hide();
        $(".copydiv").hide();
        $('body').removeClass('no-scroll');
        e.preventDefault();
    });

    $('.plat-share').on('click', function () {
        $(".mask").show();
        $(".copydiv").show();
        $('body').addClass('no-scroll');
    })
    clipboard();//复制板
}
/*放大图片轮播展示**/
function aboutPhoto() {
	$('.photobig,.manphoto').on('click', function(e) {
		//$('body').removeClass('no-scroll');
		if(e.target.className.toLowerCase().indexOf('swiper-button') >= 0) {
			return false;
		}
		$(this).hide();
	});
	var mySwiper;
	$('.photoListItem').on('click', function(e) {
		//$('body').addClass('no-scroll');
		var _index = $('.photoListItem').index($(this));
		$('#photobig').show();
		if(!mySwiper) {
			mySwiper = new Swiper('.photobigGallary', {
				pagination: '.swiper-pagination',
				initialSlide: _index,
				onSlideChangeEnd: function(swiper) {}
			})
		}
		mySwiper.slideTo(_index, 0, false);
		mySwiper.update();
	});
	var mySwiper1;

	$('.manItem').on('click', function(e) {
		//$('body').addClass('no-scroll');
		var _indexs = $('.manItem').index($(this));
		$('.manphoto').show();
		if(!mySwiper1) {
			mySwiper1 = new Swiper('.manphotos', {
				pagination: '.swiper-pagination',
				initialSlide: _indexs,
				onSlideChangeEnd: function(swiper) {}
			})
		}
		mySwiper1.slideTo(_indexs, 0, false);
		mySwiper1.update();
	});
}
//引导
function showGuide(){
	var detailGuide = localStorage.getItem("detailGuide");
	if(!detailGuide){
		$(".guide-plate").show();
		localStorage.setItem("detailGuide","1");
		$(".guide-plate-button").on("click",function(){
			$(".guide-plate").hide();
//			$(".guide-share").show();
//			localStorage.setItem("detailGuide","2");
		})
	}
	if(detailGuide=="1"){
		if(!is_qq()&&!is_wechat()){$(".guide-share").show();}//微信QQ不展示这个引导
		localStorage.setItem("detailGuide","2");
	}	
	
	$(".guide-share-icon").on("click",function(){
		$(".guide-share").hide();
		$(".mask").show();
  	$(".copydiv").show();
	})
	//分享二维码模式
	//$(".guide-share-icon").on("click",function(){
	//	$(".guide-share").hide();
    //	$(".sharediv").show();
	//})
	$(".guide-share").on("click",function(){
		$(".guide-share").hide();
	})
}

//复制板
function clipboard() {
	var clipboard = new Clipboard('.shareBtn');
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

function toRecommendItemDetail(platformid){
	window.location.href = 'platformDetail.html?platformid=' + platformid+ '&act=' + _act+'&timestamp='+timestamp();
}
