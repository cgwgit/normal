//
function ChkUtil() { }
//校验是否为空
ChkUtil.isNull = function (str) { if (null == str ||  ""== str.trim()) {  return true; } else {  return false; }};
//校验是否全是数字
ChkUtil.isDigit  = function (str) { var patrn=/^\d+$/; return patrn.test(str);};
//校验是否是整数
ChkUtil.isInteger = function (str) { var patrn=/^([+-]?)(\d+)$/; return patrn.test(str);};
//校验是否为正整数
ChkUtil.isPlusInteger = function (str) { var patrn=/^([+]?)(\d+)$/; return patrn.test(str);};
//验证身份证号码
ChkUtil.isIdCard = function (str) { var patrn=/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/; return patrn.test(str);};
//校验是否为负整数
ChkUtil.isMinusInteger = function (str) { var patrn=/^-(\d+)$/; return patrn.test(str);};
//校验是否为浮点数
ChkUtil.isFloat=function(str){ var patrn=/^([+-]?)\d*\.\d+$/; return patrn.test(str);};
//校验是否为正浮点数
ChkUtil.isPlusFloat=function(str){  var patrn=/^([+]?)\d*\.\d+$/;  return patrn.test(str);};
//校验是否为负浮点数
ChkUtil.isMinusFloat=function(str){  var patrn=/^-\d*\.\d+$/;  return patrn.test(str);};
//校验是否仅中文
ChkUtil.isChinese=function(str){ var patrn=/[\u4E00-\u9FA5\uF900-\uFA2D]+$/; return patrn.test(str);};
//校验是否仅ACSII字符
ChkUtil.isAcsii=function(str){var patrn=/^[\x00-\xFF]+$/;return patrn.test(str);};
//校验手机号码
ChkUtil.isMobile = function (str) { var patrn = /^0?1([0-9][0-9]{2})[0-9]{7}$/; return patrn.test(str);};
ChkUtil.isMobilemy = function (str) { var patrn = /^0?1([3-9][0-9]{2})[0-9]{7}$/; return patrn.test(str);};
//校验电话号码
ChkUtil.isPhone = function (str) { var patrn = /^(0[\d]{2,3}-)?\d{6,8}(-\d{3,4})?$/; return patrn.test(str);};
//校验URL地址
ChkUtil.isUrl=function(str){var patrn= /^http[s]?:\/\/[\w-]+(\.[\w-]+)+([\w-\.\/?%&=]*)?$/;return patrn.test(str);};
//校验电邮地址
ChkUtil.isEmail = function (str) { var patrn = /^[\w-]+@[\w-]+(\.[\w-]+)+$/; return patrn.test(str);};
//校验邮编
ChkUtil.isZipCode = function (str) { var patrn = /^\d{6}$/; return patrn.test(str);};
//校验合法时间
ChkUtil.isDate = function (str) {  
	if(!/\d{4}(\.|\/|\-)\d{1,2}(\.|\/|\-)\d{1,2}/.test(str)){return false;}  
	var r = str.match(/\d{1,4}/g);  
	if(r==null){return false;};  
	var d= new Date(r[0], r[1]-1, r[2]);  
	return (d.getFullYear()==r[0]&&(d.getMonth()+1)==r[1]&&d.getDate()==r[2]);};	
////////////////////////////////////////////////
ChkUtil.isDatee = function (str) {  if(!/^\d{4}(\-|\/|\.)\d{1,2}\1\d{1,2}$/.test(str)){return false;} var r = str.match(/\d{1,4}/g);  
if(r==null){return false;}; var d= new Date(r[0], r[1]-1, r[2]);  return (d.getFullYear()==r[0]&& (d.getMonth()+1)==r[1]);};

ChkUtil.isDatees = function (str) { if(!/^\d{4}-\d{1,2}$/.test(str)){return false;}else{return true;} };

//字符串
ChkUtil.isString4=function(str){ var patrn=/^(\d){4}$/; return patrn.test(str);};
ChkUtil.isString2=function(str){ var patrn=/^(\d){2}$/; return patrn.test(str);};	
ChkUtil.isString3bai=function(str){ var patrn=/^(\S){1,300}$/; return patrn.test(str);};	
ChkUtil.isString5bai=function(str){ var patrn=/^(\S){1,500}$/; return patrn.test(str);
if(r==null){return false;}; var d= new Date(r[0], r[1]-1, r[2]);  return (d.getFullYear()==r[0]&&(d.getMonth()+1));
};


ChkUtil.isString6_20=function(str){ var patrn=/^(\w){6,20}$/; return patrn.test(str);};
//删除字符串二边空格  
String.prototype.trim = function()   {    return this.replace(/(^[\s]*)|([\s]*$)/g, "");   };   
//删除字符串左边空格   
String.prototype.lTrim = function()   {    return this.replace(/(^[\s]*)/g, "");   };   
//删除字符串右边空格  
String.prototype.rTrim = function()   {    return this.replace(/([\s]*$)/g, "");   };

//身份证验证

function checkUserIdCard(idcard){
	var myBoolean=new Boolean(true);	
	var Errors=new Array("验证通过!","身份证号码位数不对!","身份证号码出生日期超出范围或含有非法字符!","身份证号码校验错误!","身份证地区非法!");
	var area={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"} 
	
	var idcard,Y,JYM;
	var S,M;
	var idcard_array = new Array();
	idcard_array = idcard.split("");
	/*地区检验*/
	if(area[parseInt(idcard.substr(0,2))]==null) 
	{
		//alert(Errors[4]);
		//frmRegister.txtCard.focus();
		myBoolean = false;
	}
	/*身份号码位数及格式检验*/
	switch(idcard.length)
	{
		case 15:
			//alert("请输入18位身份证号");
			//frmRegister.txtCard.focus();
			myBoolean = false;
		break;
	  
		case 18:
		//18位身份号码检测
		//出生日期的合法性检查 
		//闰年月日:((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))
		//平年月日:((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))
		if ( parseInt(idcard.substr(6,4)) % 4 == 0 || (parseInt(idcard.substr(6,4)) % 100 == 0 && parseInt(idcard.substr(6,4))%4 == 0 ))
		{
			ereg=/^[1-9][0-9]{5}19[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|[1-2][0-9]))[0-9]{3}[0-9Xx]$/;//闰年出生日期的合法性正则表达式
		}
		else
		{
			ereg=/^[1-9][0-9]{5}19[0-9]{2}((01|03|05|07|08|10|12)(0[1-9]|[1-2][0-9]|3[0-1])|(04|06|09|11)(0[1-9]|[1-2][0-9]|30)|02(0[1-9]|1[0-9]|2[0-8]))[0-9]{3}[0-9Xx]$/;//平年出生日期的合法性正则表达式
		}
		if(ereg.test(idcard))
		{//测试出生日期的合法性
		//计算校验位
			S = (parseInt(idcard_array[0]) + parseInt(idcard_array[10])) * 7
			+ (parseInt(idcard_array[1]) + parseInt(idcard_array[11])) * 9
			+ (parseInt(idcard_array[2]) + parseInt(idcard_array[12])) * 10
			+ (parseInt(idcard_array[3]) + parseInt(idcard_array[13])) * 5
			+ (parseInt(idcard_array[4]) + parseInt(idcard_array[14])) * 8
			+ (parseInt(idcard_array[5]) + parseInt(idcard_array[15])) * 4
			+ (parseInt(idcard_array[6]) + parseInt(idcard_array[16])) * 2
			+ parseInt(idcard_array[7]) * 1 
			+ parseInt(idcard_array[8]) * 6
			+ parseInt(idcard_array[9]) * 3 ;
			Y = S % 11;
			M = "F";
			JYM = "10X98765432";
			M = JYM.substr(Y,1);/*判断校验位*/
			if(M == idcard_array[17])
			{
				//alert(Errors[0]+"此身份证为18位"); 
				myBoolean = true; /*检测ID的校验位*/
			}
			else
			{
				//alert(Errors[3]); 
				//frmRegister.txtCard.focus();
				return false;
			}
		}
		else
		{
			//alert(Errors[2]);
			//frmRegister.txtCard.focus();
			myBoolean = false;
		}
		break;
	  
		default:
		//alert(Errors[1]); 
		//frmRegister.txtCard.focus();
		myBoolean = false;
	}
	return myBoolean;
}
	


