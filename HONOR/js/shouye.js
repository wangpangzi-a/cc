// 产品
$(function(){
$(".header_1 li").eq(0).hover(function(){
	// $(".header_2").stop().slideDown(1000,function(){
	// })
	
	$(".header_21").stop().slideDown(1000,function(){
		$(".header_22").stop().slideDown(1000)
	});

},function(){
	// $(".header_2").stop().slideUp(1000,function(){
	// })
	$(".header_22").stop().slideUp(1000,function(){
		$(".header_21").stop().slideUp(1000)
	});
	
})
$(".header_21").hover(function(){
	$(".header_21").stop().slideDown(1000,function(){
		$(".header_22").stop().slideDown(1000)
	});

},function(){
	$(".header_22").stop().slideUp(1000,function(){
		$(".header_21").stop().slideUp(1000)
	});
	
})
$(".header_22").hover(function(){
	$(".header_21").stop().slideDown(1000,function(){
		$(".header_22").stop().slideDown(1000)
	});

},function(){
	$(".header_22").stop().slideUp(1000,function(){
		$(".header_21").stop().slideUp(1000)
	});
	
})
//手机
$(".header_21 ul li:eq(0)").click(function(){
	
	$(".header_22>div").css({display:"none"}),
	$(".header_shouji").css({display:"block"})
})
//笔记本
$(".header_21 ul li:eq(1)").click(function(){
	
	$(".header_22>div").css({display:"none"}),
	$(".header_bijiben").css({display:"block"})
})
//平板
$(".header_21 ul li:eq(2)").click(function(){
	
	$(".header_22>div").css({display:"none"}),
	$(".header_pinban").css({display:"block"})
})
//智慧屏
$(".header_21 ul li:eq(3)").click(function(){
	
	$(".header_22>div").css({display:"none"}),
	$(".header_zhihuiping").css({display:"block"})
})
//智能穿戴
$(".header_21 ul li:eq(4)").click(function(){
	
	$(".header_22>div").css({display:"none"}),
	$(".header_zhinengchuandai").css({display:"block"})
})
//智能家居
$(".header_21 ul li:eq(5)").click(function(){
	
	$(".header_22>div").css({display:"none"}),
	$(".header_zhinengjiaju").css({display:"block"})
})






//新闻
$(".header_1 li").eq(2).hover(function(){
	$(".header_3").stop().slideDown(1000)
},function(){
	$(".header_3").stop().slideUp(1000)
});
$(".header_3").hover(function(){
	$(".header_3").stop().slideDown(1000)
},function(){
	$(".header_3").stop().slideUp(1000)
	});
})

//轮播图

