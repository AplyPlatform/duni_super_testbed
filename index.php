<!DOCTYPE html>
<html lang="ko">
<?php
// 헤더
include "header.php";
?>
<body>
<?
//body 불러오기

$DAY_VALUE_FOR_COOKIE = time() + 86400;

if (isset($_GET['page']) == false || $_GET['page'] == "") {
	include "main.php";
}
else if ($_GET['page'] == "user_login") {
	include "sub_header.php";
	include "user_login.php";
}
else if ($_GET['page'] == "partner_login") {
	include "sub_header.php";
	include "partner_login.php";
}
else if ($_GET['page'] == "contact") {
	include "sub_header.php";
	include "contact.php";
}
else if ($_GET['page'] == "crop" || $_GET['page'] == "dusting") {
	setcookie('from_page', $_GET['page'], $DAY_VALUE_FOR_COOKIE);
			
	if (isset($_COOKIE['temp_sns_token']) && $_COOKIE['temp_sns_token'] != "") {				
		include "sub_header.php";
		include "crop_dusting.php";
	}
	else {	
		header( 'Location: https://duni.io/index.php?page=user_login' );
	}
}
else if ($_GET['page'] == "education") {
	setcookie('from_page', $_GET['page'], $DAY_VALUE_FOR_COOKIE);
				
	if (isset($_COOKIE['temp_sns_token']) && $_COOKIE['temp_sns_token'] != "") {				
		include "sub_header.php";
		include "education.php";
	}
	else {	
		header( 'Location: https://duni.io/index.php?page=user_login' );
	}
}
else if ($_GET['page'] == "monitoring") {	
	setcookie('from_page', $_GET['page'], $DAY_VALUE_FOR_COOKIE);
		
		
	if (isset($_COOKIE['temp_sns_token']) && $_COOKIE['temp_sns_token'] != "") {				
		include "sub_header.php";
		include "monitoring.php";
	}
	else {			
		header( 'Location: https://duni.io/index.php?page=user_login' );
	}
}
else if ($_GET['page'] == "rental" || $_GET['page'] == "shooting") {
	setcookie('from_page', $_GET['page'], $DAY_VALUE_FOR_COOKIE);		
		
	if (isset($_COOKIE['temp_sns_token']) && $_COOKIE['temp_sns_token'] != "") {
		include "sub_header.php";
		include "shooting_rental.php";
	}
	else {			
		header( 'Location: https://duni.io/index.php?page=user_login' );
	}	
}
else if ($_GET['page'] == "partner") {	
			
	if (isset($_COOKIE['temp_sns_token']) && $_COOKIE['temp_sns_token'] != "") {		
		include "sub_header.php";
		include "partner_application.php";
	}
	else {				
		header( 'Location: https://duni.io/index.php?page=partner_login' );
	}
}
else if ($_GET['page'] == "user") {
			
	if (isset($_COOKIE['temp_sns_token']) && $_COOKIE['temp_sns_token'] != "") {		
		include "sub_header.php";
		include "user_application.php";
	}
	else {				
		header( 'Location: https://duni.io/index.php?page=user_login' );
	}
}



// 푸터 (공통 JS스크립트 및 CONTACT 정보등)
include "footer.php";

if ($_GET['page'] == "partner_login" || $_GET['page'] == "user_login") {
	include "login_footer.php";
}

?>    

<script>        	
//						        

$(document).ready(function(){ 
	
<?
if (isset($_GET['page']) == false || $_GET['page'] == "") {
	
}
else if ($_GET['page'] == "contact") {
?>
	setPage("contact_data", checkContactData);
<?
}
else if ($_GET['page'] == "crop" || $_GET['page'] == "dusting") {
?>
	setPage("dust", checkDustApplicationData);
<?
}
else if ($_GET['page'] == "education") {
?>
	setPage("edu", checkEduApplicationData);
<?	
}
else if ($_GET['page'] == "monitoring") {	
?>
	setPage("mon", checkMonApplicationData);
<?	
}
else if ($_GET['page'] == "user") {	
?>
	setPage("user", checkUserApplicationData);
<?	
}
else if ($_GET['page'] == "partner") {
?>
	setPage("partner", checkPartnerApplicationData);
<?
}
else if ($_GET['page'] == "rental" || $_GET['page'] == "shooting") {
?>
	setPage("shoot", checkShootApplicationData);
  setPage("rent", checkRentApplicationData);
<?	
}		
?>		

});

</script>

  </body>
</html>