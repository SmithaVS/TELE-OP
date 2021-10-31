<?php //get data from form
         
          $email = $_POST['emailaddress'];
          $to = "leptoncommunications@gmail.com";
          $subject = "Mail from LeptonCommunications";
          $txt = "Email = ".$email . "\r\n ";
          $headers = "From: noreply@leptoncommunications.com". "\r\n". "CC:info@leptoncommunications.com";
          if($email!=NULL){
            mail($to,$subject,$txt,$headers);
            header("Location:thankyou.html");
          }
          //redirect ?>