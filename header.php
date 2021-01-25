<?php

	$title_msg = "";

	if (isset($_GET['page']) == false || $_GET['page'] == "") {

	}
	else if ($_GET['page'] == "contact") {
		$title_msg = " - 문의하기";
	}
	else if ($_GET['page'] == "crop" || $_GET['page'] == "dusting") {
		$title_msg = " - 드론 방제 신청";
	}
	else if ($_GET['page'] == "education") {
		$title_msg = " - 드론 비행, 제작, 교육, 체험 신청";
	}
	else if ($_GET['page'] == "monitoring") {
		$title_msg = " - 드론을 활용한 시설물 모니터링 신청";
	}
	else if ($_GET['page'] == "partner" || $_GET['page'] == "login") {
		$title_msg = " - 파트너 신청";
	}
	else if ($_GET['page'] == "rental" || $_GET['page'] == "shooting") {
		$title_msg = " - 드론 촬영, 대여 신청";
	}


?>
    <head>
				<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130136264-10"></script>
				<script>
				  window.dataLayer = window.dataLayer || [];
				  function gtag(){dataLayer.push(arguments);}
				  gtag('js', new Date());

				  gtag('config', 'UA-130136264-10');
				</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="드론으로 할 수 있는 모든 것! - DUNI (두니)"/>
				<meta name="keywords" content="드론,파트너,중개,방제,촬영,시설물,점검,비행,교육,항공,flight,대여,체험,모니터링,Drone,DUNI,PILOT,"/>
				<meta name="author" content="aply.biz"/>
				
				<meta name="google-signin-scope" content="profile email">
  			<meta name="google-signin-client_id" content="796696970892-p16dtq9oq2oks814lu661hreampk6kjn.apps.googleusercontent.com">
  			
  			<meta name="appleid-signin-client-id" content="[CLIENT_ID]">
        <meta name="appleid-signin-scope" content="name email">
        <meta name="appleid-signin-redirect-uri" content="[REDIRECT_URI]">
        <meta name="appleid-signin-state" content="[STATE]">
        <meta name="appleid-signin-nonce" content="[NONCE]">
  			
				<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
				<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
			  	<!-- Facebook and Twitter integration -->
				<meta property="og:title" content="DUNI (두니) - 드론 중개 서비스"/>
				<meta property="og:type" content="website">
				<meta property="og:image" content="https://duni.io/assets/images/howitworks.png"/>
				<meta property="og:url" content="https://duni.io"/>
				<meta property="og:site_name" content="DUNI (두니)"/>
				<meta property="og:description" content="드론으로 할 수 있는 모든 것! - 두니 (DUNI)"/>
        <title>드론 서비스 매칭 플랫폼 DUNI <?=$title_msg?></title>
        <!-- Favicons-->
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
        <!-- Web Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Abel|Raleway|Roboto|Noto+Sans+KR" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!-- Plugins-->
        <link href="assets/css/plugins.min.css" rel="stylesheet">
        <!-- Template core CSS-->
        <link href="assets/css/template.css" rel="stylesheet">
		</head>
