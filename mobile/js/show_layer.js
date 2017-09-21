// JavaScript Document
function show_layer(size750){
	//弹出背景层
	var size=get_size();
	if(document.documentElement && document.documentElement.scrollTop){
		var size_width=document.documentElement.scrollWidth;
	}
	else{
		var size_width=document.body.scrollWidth;
	}
	jQuery(".layer_bg").css("width","100%");
	jQuery(".layer_bg").css("height",size[1]);
	jQuery(".layer_bg").css("left",0);
	jQuery(".layer_bg").css("top",0);
	jQuery(".layer_bg").fadeTo(0,0.5);

	var layer_width=(100%-size750)/2;
	var layer_height=get_scroll();
	jQuery(".layer_cc").css("width",size750);
	jQuery(".layer_cc").css("height","auto");
	jQuery(".layer_cc").css("left","3%");
	jQuery(".layer_cc").css("top",layer_height);
	
	jQuery(".layer_cc").show("slow");
}

function show_layer_gcdf(size750){
	

	var size=get_size();
	if(document.documentElement && document.documentElement.scrollTop){
		var size_width=document.documentElement.scrollWidth;
	}
	else{
		var size_width=document.body.scrollWidth;
	}
	jQuery(".layer_gcdf_bg").css("width","100%");
	jQuery(".layer_gcdf_bg").css("height",size[1]);
	jQuery(".layer_gcdf_bg").css("left",0);
	jQuery(".layer_gcdf_bg").css("top",0);
	jQuery(".layer_gcdf_bg").fadeTo(0,0.5);

	var layer_width=(100%-size750)/2;
	var layer_height=get_scroll();
	jQuery(".layer_gcdf_bg").css("width",size750);
	jQuery(".layer_gcdf_bg").css("height","auto");
	jQuery(".layer_gcdf_bg").css("left","3%");
	jQuery(".layer_gcdf_bg").css("top",layer_height);
	
	jQuery(".layer_gcdf_bg").show("slow");

}
//============================
function get_size(){
	var xScroll,yScroll;
	if(window.innerHeight && window.scrollMaxY){
		xScroll=document.body.scrollWidth;
		yScroll=window.innerHeight+window.scrollMaxY;
	}
	else if(document.body.scrollHeight>document.body.offsetHeight){
		sScroll=document.body.scrollWidth;
		yScroll=document.body.scrollHeight;
	}
	else{
		xScroll=document.body.offsetWidth;
		yScroll=document.body.offsetHeight;
	}

	var windowWidth,windowHeight;
	if(self.innerHeight){
		windowWidth = self.innerWidth;
		windowHeight = self.innerHeight;
	}
	else if(document.documentElement && document.documentElement.clientHeight){
		windowWidth=document.documentElement.clientWidth;
		windowHeight=document.documentElement.clientHeight;
	}
	else if(document.body){
		windowWidth=document.body.clientWidth;
		windowHeight=document.body.clientHeight;
	}

	var pageWidth,pageHeight
	if(yScroll<windowHeight){
		pageHeight=windowHeight;
	}
	else{
		pageHeight=yScroll;
	}
	if(xScroll<windowWidth) {
		pageWidth=windowWidth;
	}
	else{
		pageWidth=xScroll;
	}

	var arrayPageSize=new Array(pageWidth,pageHeight,windowWidth,windowHeight)
	return arrayPageSize;
}

//============================
//关闭层
//============================
function hide_layer(){
	//关闭背景层
	jQuery(".layer_bg").fadeOut();

	//关闭内容层
	jQuery(".layer_cc").hide("slow");
}

function hide_layer_gcdf(){
	jQuery(".layer_gcdf_bg").fadeOut();

	//关闭内容层
	jQuery(".layer_gcdf_cc").hide("slow");
}

function hide_layer_regional(){
	jQuery(".layer_regional_bg").fadeOut();

	//关闭内容层
	jQuery(".layer_regional_cc").hide("slow");
}
function hide_layer_nagano(){
	jQuery(".layer_nagano_bg").fadeOut();

	//关闭内容层
	jQuery(".layer_nagano_cc").hide("slow");
}

//============================
//滚动条位置
//============================
function get_scroll(){
	var t,l,w,h;
	if(document.documentElement && document.documentElement.scrollTop){
		t=document.documentElement.scrollTop;
		l=document.documentElement.scrollLeft;
		w=document.documentElement.scrollWidth;
		h=document.documentElement.scrollHeight;
	}
	else if(document.body){
		t=document.body.scrollTop;
		l=document.body.scrollLeft;
		w=document.body.scrollWidth;
		h=document.body.scrollHeight;
	}
	return t;
}