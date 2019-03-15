function inputIsNull(element){
	if(element.value == ""){
		return true;
	}
	return true;
}

/**
 * 自定义input对象，给multipleInputIsNull使用
*/
function cInputObj(id,nullFunc,notNullFunc) {
	var obj = new Object();
	obj.id = id;
	obj.nullFunc = nullFunc;
	obj.notNullFunc = notNullFunc;
	obj.getInputElement = function () {
		return document.querySelector(id);
	}
	return obj;
}

/**
 * 对input的value进行为空判断 并根据封装的inputObj里的方法进行处理
 * @param inputs
 */
function multipleInputIsNull(inputs) {
	for(var i=0;i<inputs.length;i++){
		var inputObj = inputs[i];
		var e_input = inputObj.getInputElement();
		if (e_input.value==""){
			inputObj.nullFunc();
		} else{
			inputObj.notNullFunc();
		}
	}
}
// ui
function toast(text){
	//一般直接写在一个js文件中
	layui.use(['layer', 'form'], function(){
		var layer = layui.layer
			,form = layui.form;
		layer.msg(text);
	});
}