$(document).ready(function() {
	$(".back").on("click",function(){
		history.back();
	})
	$(".kf-code-img").on("click",function(){
		$(".kf-code").show();
	})
	$(".kf-code-close").on("click",function(){
		$(".kf-code").hide();
	})
})


$('.video-out').on('click', function() {
	var html = '<video controls="controls" autoplay x-webkit-airplay="true" webkit-playsinline="true" playsinline="true"' +
		'                       width="100%" height="100%"' +
		'                       poster="http://img.shoushanghuo.com/video-out.png">' +
		'                    Your browser does not support the video tag.' +
		'                    <source src="http://gslb.ins.miaopai.com/stream/ins_5DboNTcng5ZrINNdck1ZXYc7FAWdHWek.mp4"' +
		'                            type="video/mp4">' +
		'                    <source src="http://gslb.ins.miaopai.com/stream/ins_5DboNTcng5ZrINNdck1ZXYc7FAWdHWek.mp4"' +
		'                            type="video/ogg">' +
		'                </video>'
	$('.video-out').html(html);
})
