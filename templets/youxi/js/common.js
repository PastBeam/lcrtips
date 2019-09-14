 $(document).ready(function(){		
	var typetid =get_query_val("tid");
	if (typetid==1){
	sessionStorage.setItem('nowtype', 1);		
	};
	if(typetid==2){
	sessionStorage.setItem('nowtype', 2);		
	};		
    var nowType = sessionStorage.getItem('nowtype');
		
	$(".navbar-index").on("click", function() {	
    window.location.href = "/";
    });
	
    $(".navbar-recommend").on("click", function() {
    window.location.href="/anzhuo/";
    });
	
    $(".navbar-read").on("click", function() {
    window.location.href="/yuedu/";
    });
	
    $(".gonlue-button").on("click",function(){
	if(nowType==1){
	nowType2='anzhuo';	
	}else{
	nowType2='ios';		
	}		
	location.href="/gonglue/";
    });
	
	
	
		$(".system-android").click(function(){
        window.location.href = "/anzhuo/";		
	});	
	    $(".system-ios").click(function(){
		window.location.href = "/";
	});		
      });
