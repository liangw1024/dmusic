function inputIsNull(element){
	if(element.value == ""){
		return true;
	}
	return true;
}

/**
var customInputObj = {
	'inputId':'#id',
	'nullMsg':'content'
}
判断多个input是否为null 如果为null就返回自定义的v
*/
function mInputIsNull(customInputObjs,callback){
	for(var i=0;i<customInputObjs.length,i++){
		var customInputObj = customInputObjs[i];
		var inputElement = document.querySelector(customInputObj.inputId);
		var nullMsg = customInputObj.nullMsg;
		if(inputElement.value == ""){
			
			return nullMsg;
		}else{
			return true;
		}
		
	}
}
