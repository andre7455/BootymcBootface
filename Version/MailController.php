<?php
	//Deze dependencies laden we handmatig in
	use PHPMailer\phpmailer\PHPMailer;
	require "PHPMAILER-master/src/PHPMailer.php";
	require "PHPMAILER-master/src/SMTP.php";
	require "PHPMAILER-master/src/exception.php";
	//deze function stuurt emails via google
	function mailen(){
		$mail = new PHPMailer();

		//verbinden met gmail
		$mail->isSMTP();
		$mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
		$mail->Host = "smtp.gmail.com";
		$mail->Port = "587";

		//gmail identificatie
		$mail->Username = "CoralYachtsSamAndreMarco@gmail.com";
		$mail->Password = "Wachtwoord123";

		//email opstellen
		$mail->isHTML(true);
		$mail->SetFrom("CoralYachtsSamAndreMarco@gmail.com","Admin");
		$mail->Subject = "hoi";
		$mail->ChatSet = "UTF-8";
		$bericht = "<body style=\"font-family: Courier New, Courier; font-size: 14px; color: #000;\">je moeder</body></html>";
		$mail->AddAddress("samjnbles@gmail.com", "Sam");
		$mail->Body = $bericht;
		//stuur mail
        $mail->Send();
	}

    try{
        mailen(); 
        echo "mad genius";

        //header("Location: index.php");
    }catch (PDOException $e) {
        echo "ya fucked up";
    }
      
      
        /*
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $text = $_POST["text"];
      
        try{
          mailen(); 
        }catch(PDOException $e){
              echo $e;
        }
      */

      
?>