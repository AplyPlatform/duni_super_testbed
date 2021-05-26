
var bRefSet = false;

var referrer_site = "direct";

// 인증 타이머 글로벌 함수 혜지프로
var interval_timer;
	
function showLoader() {
	$("#loaderbox").show();
}

function hideLoader() {
	$("#loaderbox").hide();
}

function showDialog(msg, targetURL) {
	$('#contact-response').text(msg);
	$('#modal-1').modal('show');
	
	
  $('#askModalOKButton').off('click');
  $('#askModalOKButton').click(function () {
      $('#modal-1').modal('hide');
      if (isSet(targetURL)) {        
        location.href=targetURL;
      }
  });    		
}

function commonCheckField(form_id) {
	if ($(form_id).find('input[name="form_phone"]').val() == "") {
		showDialog("전화번호를 입력하세요.", null);
		return false;
	}
	
	setCookie("temp_phone", $(form_id).find('input[name="form_phone"]').val(), 1);
	setCookie("temp_name", $(form_id).find('input[name="form_name"]').val(), 1);

	if ($(form_id).find("#agree_1").length > 0 && $(form_id).find("#agree_1").is(":checked") == false) {
		showDialog("이용약관 및 개인정보 처리방침에 동의해주세요.", null);
		return false;
	}

	if ($(form_id).find("#agree_2").length > 0 && $(form_id).find("#agree_2").is(":checked") == false) {
		showDialog("서비스 매칭을 위한 '개인정보 제3자 제공' 항목에 동의해주세요.", null);
		return false;
	}

	if ($(form_id).find("#agree_3").length > 0 && $(form_id).find("#agree_3").is(":checked") == false) {
		showDialog("이용약관 및 개인정보 처리방침에 동의해주세요.", null);
		return false;
	}

	if ($(form_id).find("#agree_4").length > 0 && $(form_id).find("#agree_4").is(":checked") == false) {
		showDialog("서비스 매칭을 위한 '개인정보 제3자 제공' 항목에 동의해주세요.", null);
		return false;
	}
}

function checkContactData(form_id) {


	$(form_id).find('input[name="form_kind"]').val("문의");

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름 또는 업체명을 입력하세요.", null);
		return false;
	}
	
	if ($(form_id).find('input[name="form_phone"]').val() == "") {
		showDialog("전화번호를 입력하세요.", null);
		return false;
	}
	
	if ($(form_id).find('input[name="form_email"]').val() == "") {
		showDialog("이메일을 입력해 주세요.", null);
		return false;
	}
	
	if ($(form_id).find('input[name="form_message"]').val() == "") {
		showDialog("문의하실 내용을 입력해 주세요.", null);
		return false;
	}

	return true;
}



function checkUserApplicationData(form_id) {

	$(form_id).find('input[name="form_kind"]').val("사용자");
	
	if ($(form_id).find(":input:radio[name=p_type]:checked").val() == "") {
		showDialog("사업자 상태를 선택하세요. (개인 또는 업체)", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름 또는 업체명을 입력하세요.", null);
		return false;
	}
	
	if ($(form_id).find('input[name="form_email"]').val() == "") {
		showDialog("이메일 주소를 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_phone"]').val() == "") {
		showDialog("전화번호를 입력하세요.", null);
		return false;
	}
	
	var sns_token = getCookie("temp_sns_token");
	var sns_kind = getCookie("temp_sns_kind");	

	$(form_id).find('input[name="form_sns_token"]').val(sns_token);
	$(form_id).find('input[name="form_sns_kind"]').val(sns_kind);
		

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}




function checkPartnerApplicationData(form_id) {

	var min_type = "";
	if( $(form_id).find('input[name="min_type_1"]').is(":checked")) {
		min_type = "방제";
	}

	if( $(form_id).find('input[name="min_type_2"]').is(":checked")) {
		if (min_type == "") min_type = "촬영";
		else min_type = min_type + ",촬영";
	}

	if( $(form_id).find('input[name="min_type_3"]').is(":checked")) {
		if (min_type == "") min_type = "교육";
		else min_type = min_type + ",교육";
	}

	if (min_type == "") {
		showDialog("분야를 선택하세요.", null);
		return false;
	}

	$(form_id).find('input[name="form_kind"]').val("파트너");
	$(form_id).find('input[name="min_type"]').val(min_type);
	
	if ($(form_id).find(":input:radio[name=p_reg_biz]:checked").val() == "") {
		showDialog("드론 사업자 등록 여부를 선택하세요.", null);
		return false;
	}
	
	if ($(form_id).find(":input:radio[name=p_reg_mac]:checked").val() == "") {
		showDialog("비행장치 신고 여부를 선택하세요.", null);
		return false;
	}
	
	if ($(form_id).find(":input:radio[name=p_reg_ins]:checked").val() == "") {
		showDialog("영업배상 책임보험 가입 여부를 선택하세요.", null);
		return false;
	}

	if ($(form_id).find(":input:radio[name=p_type]:checked").val() == "") {
		showDialog("사업자 상태를 선택하세요. (개인 또는 업체)", null);
		return false;
	}

	if ($(form_id).find('input[name="form_loc"]').val() == "") {
		showDialog("서비스 제공이 가능한 주소 또는 위치를 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름 또는 업체명을 입력하세요.", null);
		return false;
	}
	
	if ($(form_id).find('input[name="form_email"]').val() == "") {
		showDialog("이메일 주소를 입력하세요.", null);
		return false;
	}
	
	var sns_token = getCookie("temp_sns_token");
	var sns_kind = getCookie("temp_sns_kind");	

	$(form_id).find('input[name="form_sns_token"]').val(sns_token);
	$(form_id).find('input[name="form_sns_kind"]').val(sns_kind);
		

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}

function checkMonApplicationData(form_id) {
	$(form_id).find('input[name="form_kind"]').val("모니터링");

	if ($(form_id).find('input[name="form_loc"]').val() == "") {
		showDialog("서비스 받으실 위치를 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름을 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_date"]').val() == "") {
		showDialog("일정을 입력하세요.", null);
		return false;
	}

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}

function checkDustApplicationData(form_id) {
	$(form_id).find('input[name="form_kind"]').val("방제");

	if ($(form_id).find('input[name="form_loc"]').val() == "") {
		showDialog("서비스 받으실 위치를 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름을 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_date"]').val() == "") {
		showDialog("일정을 입력하세요.", null);
		return false;
	}

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}

function checkRentApplicationData(form_id) {
	$(form_id).find('input[name="form_kind"]').val("대여");

	if ($(form_id).find('input[name="form_loc"]').val() == "") {
		showDialog("서비스 받으실 위치를 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름을 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_date"]').val() == "") {
		showDialog("일정을 입력하세요.", null);
		return false;
	}

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}



function checkShootApplicationData(form_id) {
	var min_type = "";
	if ($(form_id).find('input[name="min_type_1"]').is(":checked")) {
		min_type = "개인";
	}
	if ($(form_id).find('input[name="min_type_2"]').is(":checked")) {
		if (min_type == "") min_type = "웨딩";
		else min_type = min_type + "|웨딩";
	}
	if ($(form_id).find('input[name="min_type_3"]').is(":checked")) {
		if (min_type == "") min_type = "기타";
		else min_type = min_type + "|기타";
	}

	if (min_type == "") {
		showDialog("서비스 유형을 선택하세요.", null);
		return false;
	}

	$(form_id).find('input[name="form_kind"]').val("촬영");
	$(form_id).find('input[name="min_type"]').val(min_type);

	if ($(form_id).find('input[name="form_loc"]').val() == "") {
		showDialog("서비스를 받으실 위치를 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름을 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_date"]').val() == "") {
		showDialog("일정을 입력하세요.", null);
		return false;
	}

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}

function checkEduApplicationData(form_id) {
	var min_type = "";
	if( $(form_id).find('input[name="min_type_1"]').is(":checked")) {
		min_type = "조종";
	}
		
	if( $(form_id).find('input[name="min_type_2"]').is(":checked")) {
		if (min_type != "") min_type = min_type + "|";
		min_type = min_type + "코딩";
	}

	if( $(form_id).find('input[name="min_type_3"]').is(":checked")) {
		if (min_type != "") min_type = min_type + "|";
		min_type = min_type + "제작";
	}

	if( $(form_id).find('input[name="min_type_4"]').is(":checked")) {
		if (min_type != "") min_type = min_type + "|";
		min_type = min_type + "체험";
	}

	if (min_type == "") {
		showDialog("교육 유형을 선택하세요.", null);
		return false;
	}

	$(form_id).find('input[name="form_kind"]').val("교육");
	$(form_id).find('input[name="min_type"]').val(min_type);

	if ($(form_id).find('input[name="form_loc"]').val() == "") {
		showDialog("지역을 입력하세요.", null);
		return false;
	}

	if ($(form_id).find('input[name="form_name"]').val() == "") {
		showDialog("이름을 입력하세요.", null);
		return false;
	}

	if (commonCheckField(form_id) == false)
		return false;

	return true;
}

var appSent = false;
function sendApplicationData(form_id, token)
{
	$(form_id).find('input[name="form_token"]').val(token);
	var ref = $('<input type="hidden" value="' + referrer_site + '" name="ref">');	
	$(form_id).append(ref);	
	ref = $('<input type="hidden" value="' + getCookie("user_clientid") + '" name="clientid">'); //todo
	$(form_id).append(ref);

	

	var sed = new FormData($(form_id)[0]);		
			
	$.ajax({
		type: "POST",
		dataType : "json",
		url: 'https://duni.io/handler/handler.php',
		data:sed,
		enctype: 'multipart/form-data', // 필수
		processData: false,
    contentType: false,
    cache: false,
		success: function (data) {			
			if (data.result == "success") {
				appSent = true;								
				
				$(form_id)[0].reset();				
				
				var from_page = getCookie("from_page");
				var targetUrl = null;
				if (isSet(from_page) && getQueryVariable("page") != from_page) {
					targetUrl = "/index.php?page=" + from_page;
				}
				
				showDialog("서비스 신청이 완료되었습니다. DUNI가 검토 후 연락드리겠습니다!", targetUrl);
			}
			else {
				if (data.reason.indexOf("email is already exists") >= 0) {
					showDialog("이미 등록된 이메일 입니다. 다른 이메일 주소를 입력해 주세요.", null);
				}
				else showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
			}
			
			$(form_id + " input").last().remove();
		},
		error: function(jqXHR, text, error){			
			showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
		}
	});
}


function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
            return decodeURIComponent(pair[1]);
        }
    }
}


function setRef() {
	
	if (bRefSet == true) return;
	
	bRefSet = true;
	
	var refData = document.referrer;

	if (refData == null || refData == "") {
		setCookie("referrer_site", referrer_site, 1);
		return;
	}

	if (refData.indexOf("duni.io") != -1) {
		referrer_site = getCookie("referrer_site");
		return;
	}

	referrer_site = refData;
	setCookie("referrer_site", referrer_site, 1);
}

// 인증기간 타이머 혜지프로
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    interval_timer = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.text(minutes + ":" + seconds);

        if (--timer < 0) {
			clearInterval(interval_timer);
			showDialog("인증번호 입력시간이 만료되었습니다.", location.href);
        }
    }, 1000);
}

// 전화번호 코드 전송 혜지프로
function verifyPhoneHandler(form_p_id, checkFunc) {
	var form_id = "#" + form_p_id;

	$(form_id + "_verify_phone").on("click", function(e) {
		e.preventDefault();
		// check if phone number starts with 01 and is total of 11 digits
		let phone_number = $(form_id).find('input[name="form_phone"]').val();
		if((phone_number.length != 8) || (phone_number.substring(0,2) != "01")){
			showDialog("휴대번호를 정확히 입력해 주세요.");
			return;
		}
		grecaptcha.ready(function() {
			grecaptcha.execute('6LfPn_UUAAAAAN-EHnm2kRY9dUT8aTvIcfrvxGy7', {action: 'homepage'}).then(function(token) {
			   // send phone verification
				var jdata = {"action": "member2", "daction" : "validate_phonenumber", "phone_number" : phone_number, "g-token": token};
				ajaxRequest(jdata, 
					function (data){
						let result = data.aligo.result_code;
						if(data.aligo.code == "200" || 	result == "1"){ //정상응답
							if (result == "1") {      // 전송성공  
								showDialog("인증번호가 전송되었습니다.", null);
								// 인증하기 텍스트 -> 재전송
								$(form_id + "_verify_phone").val("재전송");
								var duration = 60 * 3;
								var display = $('#remaining_time');
								startTimer(duration, display);
								$("#code_verification_input").show();
									//return;
							} else if (result == "-101") {
								showDialog("잘못된 전화번호입니다. 다시 입력해주세요.");
							} else if (result == "-410") {
								showDialog("이미 가입된 전화번호입니다. 다른번호를 입력해주세요.");
							} else {
								showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
							}
						} else {
							showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
						}
					},
					function (err, stat, error) {
						showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
					}
				);
			});
		});
	});	
	$(form_id + "_verify_code").click(function(e) {
		e.preventDefault();
		let verification_code = $(form_id).find('input[name="verification_code"]').val();
		if(verification_code == ""){
			showDialog("인증번호를 입력해주세요.");
			return;
		} 
		grecaptcha.ready(function() {
			grecaptcha.execute('6LfPn_UUAAAAAN-EHnm2kRY9dUT8aTvIcfrvxGy7', {action: 'homepage'}).then(function(token) {
				var jdata = {"action" : "member2", "daction" : "check_verifycode", "phone_number" : $(form_id).find('input[name="form_phone"]').val(), "verify_code" : verification_code, "g-token" : token};
				ajaxRequest(jdata,
					function(data){
						if (data.aligo.code == "200") { // 정상응답
							let result = data.aligo.result_code;
							if(result == "10"){
								$(form_id).find('input[name="verification_code"]').val("");
								$("#code_verification_input").hide();			
								showDialog("인증되었습니다.", null);
								clearInterval(interval_timer);
								return;
							}
							if(result =="-400"){
								showDialog("인증번호가 일치하지 않습니다. 다시 입력해주세요.", null);
								return;
							}
							if(result == "-408"){
								showDialog("인증시간이 초과되었습니다. 다시 시도해주세요", null);
								return;
							}
							//return;
						} else {
							showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
							return;
						}
					},
					function (err, stat, error) {
						showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
					}
				);
			});
		});
			
			
			// $.ajax({
			// 	url: "https://api.duni.io/v1",
			// 	dataType: "json",
			// 	crossDomain: true,
			// 	cache: false,
			// 	data: JSON.stringify(jdata),
			// 	type: "POST",
			// 	contentType: "application/json; charset=utf-8",
			// 	success: function (r) {
			// 			// 200안으로 코드정리
			// 			if (r.code == "200") {      // 인증성공 
			// 				$(form_id).find('input[name="verification_code"]').val("");
			// 				$("#code_verification_input").hide();			
			// 				showDialog("인증되었습니다.", null);
			// 				clearInterval(interval_timer);
			// 				//return;
			// 			} else if (r.code == "400") {
			// 				showDialog("인증번호가 일치하지 않습니다. 다시 입력해주세요.");
			// 			} else if (r.code == "408") {
			// 				showDialog("인증시간이 초과되었습니다. 다시 시도해주세요.");
			// 			}
			// 	},
			// 	error: function (request, status, error) { 
			// 		showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);           
			// 		//errorcallback(request, status, error);
			// 	}
			// });	
		
		

	});

	$('[name^=form_phone]').keypress(validateNumber);
}

function setSubmitHandler(form_p_id, checkFunc) {
	var form_id = "#" + form_p_id;

	$(form_id + "_send").on("click", function(e) {
		e.preventDefault();
		
		if (appSent == true) {
			if (confirm('이미 신청된 내용이 있습니다. 신청을 다시 진행 하시겠습니까?')) {	} 
			else {
			  return;	
			}
		}
						
		if (checkFunc(form_id) == false) return;
				
		grecaptcha.ready(function() {
	      grecaptcha.execute('6LfPn_UUAAAAAN-EHnm2kRY9dUT8aTvIcfrvxGy7', {action: 'homepage'}).then(function(token) {
	         sendApplicationData(form_id, token);
	      });
	  });
	});

	$('[name^=form_phone]').keypress(validateNumber);
}



function setPage(form_id, checkFunc) {	
	setRef();
	var name = getCookie("temp_name");
	if (isSet(name)) {			
			if ($("#form_name")) 
				$("#form_name").val(name);						
				
			if ($("#form_name2")) 
				$("#form_name2").val(name);						
	}
	
	var email = getCookie("temp_email");	
	if (isSet(email)) {
		$("#form_email").val(email);		
	}
	
	var phone_number = getCookie("temp_phone");
	if (isSet(phone_number)) {
		if ($("#form_phone")) {
			$("#form_phone").val(phone_number);		
		}
		
		if ($("#form_phone2")) {
			$("#form_phone2").val(phone_number);		
		}		
	}
	if(form_id == "user"){
		verifyPhoneHandler(form_id, checkFunc);
	}		
	setSubmitHandler(form_id, checkFunc);
	checkLoginStatus();
}

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
        return true;
    }
}
function delCoockie(cName) {
	document.cookie = name + "= " + "; expires=" + date.toUTCString() + "; path=/";
}

function setCookie(cName, cValue, cDay){
    var date = new Date();
    date.setTime(date.getTime() + cDay * 60 * 60 * 24 * 1000);
    document.cookie = cName + '=' + cValue + ';expires=' + date.toUTCString() + ';path=/';
}

function getCookie(cName) {
    var value = document.cookie.match('(^|;) ?' + cName + '=([^;]*)(;|$)');
    return value? value[2] : null;
}



function formSubmit(kind) {
  setCookie("temp_sns_kind", kind, 1);
  location.href="/login_bdg.html";
}

function onFacebook() {
  formSubmit("facebook");
}

function onGoogle() {
  formSubmit("google");
}

function onNaver() {
  formSubmit("naver");
}

function checkLoginStatus() {
  var url_string = window.location.href;
  var isFromApp = location.search.split('fromapp=')[1];
  if (isFromApp != null) {
    isFromApp = isFromApp.split('&')[0];
  }
  else {
    isFromApp = "no";
  }

  setCookie("isFromApp", isFromApp, 1);
}



function isSet(value) {
  if (value == "" || value == null || value == "undefined") return false;

  return true;
}

function naverSignInCallback() {
  var token = naver_id_login.oauthParams.access_token;
  var email = naver_id_login.getProfileData('email');
	var name = naver_id_login.getProfileData('name');	
  
  setCookie("temp_email", email, 1);
  setCookie("temp_name", name, 1);
  setCookie("temp_sns_token", token, 1);
  setCookie("temp_sns_kind", "naver", 1);
  checkLogin();
}


function facebookSignInCallback() {    
  FB.getLoginStatus(function(response) {      
    if (response.status == "connected") {      	
    	
      var token = response.authResponse.accessToken;                
      setCookie("temp_sns_token", token, 1);        
      setCookie("temp_sns_kind", "facebook", 1);
      
      FB.api('/me', { locale: 'en_US', fields: 'name, email' },
			  function(lresponse) {
			    if (token != null && token != "") {
			    	setCookie("temp_email", lresponse.email, 1);  
						setCookie("temp_name", lresponse.name, 1);  						
		        checkLogin();
	        }
	        else {
	        	checkLogin();
	        }
			  }
			);				        
    }
    else {
    }
  });
}

function goHome() {
   	location.href="/index.php";
}

function logOut() {				
		var jdata = {"action":"member", "daction":"logout"};
		
		ajaxRequest(jdata, 
			function (data) {
				setCookie("temp_sns_token", "", 1);
				setCookie("temp_sns_kind", "", 1);
				setCookie("temp_phone", "", 1);
				setCookie("temp_name", "", 1);
				setCookie("temp_email", "", 1);
				setCookie("user_clientid", "", 1);
				setCookie("user_token", "", 1);
				goHome();
			},
			function (req, status, error) {
				showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);				
			}
		);						
}

function checkLogin() {
		
		var sns_token = getCookie("temp_sns_token");
		var sns_kind = getCookie("temp_sns_kind");
		var jdata = {"action":"member", "daction":"login", "sns_token" : sns_token, "sns_kind" : sns_kind, "service" : "user"};
		
		ajaxRequest(jdata, 
				function (data) {
						if (data.result == "success") {										
								var from_page = getCookie("from_page");
								
								if (isSet(from_page)) {						
									if ("user_kind" in data) {
										setCookie("user_kind", data.user_kind, 1);
									}
									
									if ("phonenumber" in data) {
										setCookie("temp_phone", data.phonenumber, 1);
									}
									
									if ("name" in data) { 
										setCookie("temp_name", data.name, 1);
									}
									
									if ("socialid" in data) {
										setCookie("temp_email", data.socialid, 1);
									}
									
									if ("emailid" in data) {
										setCookie("user_clientid", data.emailid, 1);
									}
									
									if ("token" in data) {
										setCookie("user_token", data.token, 1);
									}
																						
									location.href="/index.php?page=" + from_page;
								}					
								else {
									location.href="/index.php";
								}
						}
						else {					
								location.href="/index.php?page=user";
						}		
				},
				function (err, stat, error) {
						showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
				}
		);								
}


function googleInit() {  
  gapi.load('auth2', function() { // Ready.  	
			var gauth = gapi.auth2.init();    
			
			var options = new gapi.auth2.SigninOptionsBuilder();
			options.setPrompt('select_account');
			
			if (document.getElementById('googleLoginBtn')) {
				gauth.attachClickHandler(document.getElementById('googleLoginBtn'), options,
		        function(googleUser) {		          		                             															
							var profile = googleUser.getBasicProfile();	
							var token = googleUser.getAuthResponse().id_token;
							
							setCookie("temp_sns_token", token, 1);        
	      			setCookie("temp_sns_kind", "google", 1);
							
							var name = profile.getName();
							var email = profile.getEmail();
							
							setCookie("temp_email", email, 1);  
							setCookie("temp_name", name, 1);  			
							
							checkLogin();
		              
		        }, function(error) {
		          showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
		        });
		  }
		  
		  if (document.getElementById('googleLoginBtn2')) {
				gauth.attachClickHandler(document.getElementById('googleLoginBtn2'), options,
		        function(googleUser) {		          		                             															
							var profile = googleUser.getBasicProfile();	
							var token = googleUser.getAuthResponse().id_token;
							
							setCookie("temp_sns_token", token, 1);        
	      			setCookie("temp_sns_kind", "google", 1);
							
							var name = profile.getName();
							var email = profile.getEmail();
							
							setCookie("temp_email", email, 1);  
							setCookie("temp_name", name, 1);  			
							
							checkLogin();
		              
		        }, function(error) {
		          showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
		        });
		  }
	});    
}


function naverInit() {
  var naverLogin = new naver.LoginWithNaverId(
      {
        clientId: "wSvRwDA6qt1OWrvVY542",
        callbackUrl: "https://duni.io/center/navercallback.html",
        isPopup: false        
      }
    );  

  if (naverLogin == null) {    
    return;
  }

  naverLogin.init();
  
  if ($("#naverLoginBtn")) {
  	$("#naverLoginBtn").attr("href", naverLogin.generateAuthorizeUrl());    
  }
  
  if ($("#naverLoginBtn2")) {
  	$("#naverLoginBtn2").attr("href", naverLogin.generateAuthorizeUrl());    
  }
}

function facebookInit() {
	
	window.fbAsyncInit = function() {
      FB.init({
        appId            : '570867566598427',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v2.11'
      });
      
      if (document.getElementById('facebookLoginBtn')) {
	      document.getElementById('facebookLoginBtn').addEventListener('click', function() {    
	  			FB.login(facebookSignInCallback);
				}, false);	
			}
			
			if (document.getElementById('facebookLoginBtn2')) {
	      document.getElementById('facebookLoginBtn2').addEventListener('click', function() {    
	  			FB.login(facebookSignInCallback);
				}, false);
			}
  };
	
}

function kakaoLogin() {
	Kakao.Auth.login({	    
	    success: function(authObj) {
	      Kakao.API.request({
	        url: '/v2/user/me',
	        success: function(res) {	        	
            setCookie("temp_sns_token", authObj.access_token, 1);
	      		setCookie("temp_sns_kind", "kakao", 1);
	      		
	      		if ("properties" in res) {
							if ("nickname" in res.properties) {
								var name = res.properties['nickname'];
								setCookie("temp_name", name, 1);
							}														
						}
												
						if ("kakao_account" in res) {
							if ("email" in res.kakao_account) {
								var email = res.kakao_account['email'];								
								setCookie("temp_email", email, 1);
							}							
						}
																															
						checkLogin();
	        },
	        fail: function(error) {
	          showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
	        },
	      })
	    },
	    fail: function(err) {
	      showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
	    },
	  });
}

function kakaoInit() {
	Kakao.init('2117cedaa3150d4eecd95cc8560f8e21');
	
	if (document.getElementById('kakaoLoginBtn')) {
		document.getElementById('kakaoLoginBtn').addEventListener('click', function() {    
	  			kakaoLogin();
		}, false);
	}
	
	if (document.getElementById('kakaoLoginBtn2')) {
		document.getElementById('kakaoLoginBtn2').addEventListener('click', function() {    
	  			kakaoLogin();
		}, false);
	}
}

function appleInit() {
	AppleID.auth.init({
            clientId : 'biz.aply.duni.signin',
            scope : 'name email',
            redirectURI: 'https://duni.io',            
            usePopup : true
        });
  if (document.getElementById('appleLoginBtn')) {
  			const buttonElement = document.getElementById('appleLoginBtn');
        buttonElement.addEventListener('click', () => {
            AppleID.auth.signIn();
        });
	}
	
	if (document.getElementById('appleLoginBtn2')) {
  			const buttonElement = document.getElementById('appleLoginBtn2');
        buttonElement.addEventListener('click', () => {
            AppleID.auth.signIn();
        });
	}
	
	document.addEventListener('AppleIDSignInOnSuccess', function (data) {          					     					
			var token = data.detail.authorization.id_token;
			
			setCookie("temp_sns_token", token, 1);        
			setCookie("temp_sns_kind", "apple", 1);														
			
			checkLogin();
	});
	//Listen for authorization failures
	document.addEventListener('AppleIDSignInOnFailure', function (error) {
	     //handle error.
	     showDialog("죄송합니다, 일시적인 오류가 발생하였습니다. 다시 시도 부탁드립니다.", null);
	});
}

function ajaxRequest(data, callback, errorcallback) {
    $.ajax({
        url: "https://api.duni.io/v1/",
        dataType: "json",
        crossDomain: true,
        cache: false,
        data: JSON.stringify(data),
        type: "POST",
        contentType: "application/json; charset=utf-8",
        beforeSend: function (request) {
            request.setRequestHeader("droneplay-token", getCookie('user_token'));
        },
        success: function (r) {
        		if (r.result != "success" && (("reason" in r) && r.reason.indexOf("invalid token") >= 0)) {        			
        			logOut();
        			return;
        		}
        		
            callback(r);
        },
        error: function (request, status, error) {            
            errorcallback(request, status, error);
        }
    });
}
