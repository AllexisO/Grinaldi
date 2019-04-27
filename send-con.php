<?php
	require_once __DIR__  .  '/../../plugins/polylang/include/api.php' ;

	if(!empty($_POST['email']) AND !empty($_POST['name']) AND !empty($_POST['phone']) AND !empty($_POST['message'])){
		
				$headers = 'Message from Grinaldi.com';
				$letter = "MIME-Version: 1.0" ."\r\n";
				$letter .="Content-Type: text/html; charset=UTF-8" ."\r\n";
				$letter = 'Name: ' .$_POST['name'] . "\n\n" . 'Email: ' .$_POST['email'] . "\n\n" . 'Phone: ' .$_POST['phone'] . "\n\n" . 'Message: ' .$_POST['message'];
	
	if (mail('shuricpan@gmail.com', $headers, $letter)){
	echo '<script>alert("Mulțumim că ne-ai contactat. Vom reveni la dvs. cât mai curând posibil\n\nБлагодарим Вас за обращение к нам. Мы свяжемся с вами как можно скорее\n\nThank you for contacting us. We will get back to you as soon as possible")</script>'; 
	} else { 
	echo '<script>alert("A apărut o eroare la trimiterea mesajului. Încercați din nou\n\nПри передаче сообщения произошла ошибка. Попробуйте еще раз\n\nAn error occurred while sending the message. Please, try again")</script>'; 
	}
}
exit('<meta http-equiv="refresh" content="0; url=../../../" />');
	
	/*if(!empty($_POST['email']) AND !empty($_POST['name']) AND !empty($_POST['phone']) AND !empty($_POST['message'])){
		$headers = 'Message from Grinaldi.com';
		$letter = "MIME-Version: 1.0" ."\r\n";
		$letter .="Content-Type: text/html; charset=UTF-8" ."\r\n";
		$letter = 'Name: ' .$_POST['name'] . "\n\n" . 'Email: ' .$_POST['email'] . "\n\n" . 'Phone: ' .$_POST['phone'] . "\n\n" . 'Message: ' .$_POST['message'];
		if (mail('shuricpan@gmail.com', $headers, $letter)){
				if (pll_current_language() == 'ru') { echo '<script>alert("Благодарим Вас за обращение к нам. Мы свяжемся с вами как можно скорее")</script>'; } 
				elseif (pll_current_language() == 'ro') { 
					echo '<script>alert("Mulțumim că ne-ai contactat. Vom reveni la dvs. cât mai curând posibil")</script>'; }
				else { echo '<script>alert("Test")</script>'; }
			/*echo '<script>alert(<?php echo tStr(About_us); ?>)</script>'; 
			//echo "console.log('Thank you for contacting us. We will get back to you as soon as possible');";
		} else {
			echo "Error: something wrong";
		}
	}
		exit('<meta http-equiv="refresh" content="0; url=../../../ru/contacti"/>');
		//exit('<meta http-equiv="refresh" content="0; url=../../../ru/contacti"/>');
		//if (pll_current_language() == 'ru') { echo ('contacti'); } elseif (pll_current_language() == 'ro') { echo ('ro/despre-noi/'); } 
		//else { echo ('eng/about-us/'); }
		//if (pll_current_language() == 'ru') { echo ('<meta http-equiv="refresh" content="0; url=../../../ru/contacti"/>'); } elseif (pll_current_language() == 'ro') { echo ('<meta http-equiv="refresh" content="0; url=../../../ro/contacte"/>'); } 
		//else { echo ('<meta http-equiv="refresh" content="0; url=../../../en/contacts"/>'); }
		//header("Location: http://$_SERVER[SERVER_NAME]/$_SERVER[REQUEST_URI]");
	//header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
	//exit('<meta http-equiv="refresh" content="0; url=index.php"/>');
	//exit('<meta http-equiv="refresh" content="0; url=/ru/contacti />');
	//info@grinaldi.com
	