var btn = document.getElementById('btn_moreDetail');
var lineArrow = document.getElementById('opt_bg');
var optFieldset = $('#optionalItem');
var img = $('#opt_bg');
var body = $('body');
var form = document.getElementById('zhaoxinForm');
btn.addEventListener("click",function(event){
	event.preventDefault();
	img.slideDown(300);
	$('html,body').animate({scrollTop: '1230px'}, 800);
	optFieldset.delay(200).slideDown(500);
});
function validate_ele(kind){
	if(kind == "name"){
		var reg = /^[\u4e00-\u9fa5]{2,4}$/;
	}
	else if(kind == "cellphone"){
		var reg = /^1[3|5|7|8|][0-9]{9}$/;
	}
	else if(kind == "class"){
		var reg = /^[\u4e00-\u9fa5]{2}\d{4}$/;
	}
	if(reg.test(event.target.value)){
			event.target.style.background = "#e8e8e8";
		}
	else{
		event.target.style.background = "#edcb53";
	}
}
function validate_form(){
	var eles = document.getElementsByTagName("input");
	var error = 0;
	for(var i = 0 ; i < 3 ; i++){
		if(eles[i].name == "name"){
			var reg = /^[\u4e00-\u9fa5]{2,4}$/;
		}
		else if(eles[i].name == "cellPhone"){
			var reg = /^1[3|5|7|8|][0-9]{9}$/;
		}
		else if(eles[i].name == "class"){
			var reg = /^[\u4e00-\u9fa5]{2}\d{4}$/;
		}
		if(reg.test(eles[i].value)){
			eles[i].style.background = "#e8e8e8";
		}
		else{
			eles[i].style.background = "#edcb53";
			eles[i].focus();
			error--;
		}
	}
	if(error >= 0){
		return true;
	}
	else return false;
}