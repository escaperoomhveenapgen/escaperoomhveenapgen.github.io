<?php
  
if($_POST) {
    $voornaam = "";
    $achternaam = "";
    $email = "";
    $zin_1 = "";
    $zin_2 = "";
    $zin_3 = "";
    $zin_4 = "";
    $zin_5 = "";
    $email_body = "<div>";
      
    if(isset($_POST['voornaam'])) {
        $visitor_name = filter_var($_POST['voornaam'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Voornaam:</b></label>&nbsp;<span>".$voornaam."</span>
                        </div>";
    }
 
   if(isset($_POST['achternaam'])) {
        $visitor_name = filter_var($_POST['achternaam'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Achternaam:</b></label>&nbsp;<span>".$achternaam."</span>
                        </div>";
    }
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
         
    if(isset($_POST['zin_1'])) {
        $visitor_message = htmlspecialchars($_POST['zin_1']);
        $email_body .= "<div>
                           <label><b>Zin 1: 1 9 25 24 25 8 21 16 9 8 24 ,</b></label>
                           <div>".$zin_1."</div>
                        </div>";
    }
    
   if(isset($_POST['zin_2'])) {
        $visitor_message = htmlspecialchars($_POST['zin_1']);
        $email_body .= "<div>
                           <label>Zin 2: <b><u>In de</u> 9 7 1 25 16 3 8 1 <u>van</u></b> <br> 
      <b> 2 25 25 12 25 8 16 25 25 8    6 3 1 14</b> <br>
      <b> 25 12 1 25 8 13 <u>een</u>  13 23 2 21 14</b> <br>
      <b> 22 25 1 12 21 16 25 8 <u>die het</u> </b><br>
      <b> 16 25 12 6 25 24 25 8, <u>het</u></b><br>
      <b> 2 25 24 25 8 <u>en de</u></b><br>
      <b> 14 9 25 5 9 7 13 14  22 25 16 21 14.</b></label>
                           <div>".$zin_2."</div>
                        </div>";
    }    
  
   if(isset($_POST['zin_3'])) {
        $visitor_message = htmlspecialchars($_POST['zin_1']);
        $email_body .= "<div>
                           <label>Zin 3:<b> 9 7 24 21 14 <u>we nu</u></b><br>
       <b> 7 3 8 24 25 12 <u>in het</u></b><br>
       <b> 25 23 2 14  16 25 12 22 9 8 24 25 8</b><br>
       <b> 20 3 4 8, <u>is het</u></b><br>
       <b> 2 9 9 1 8 9 24 3 1 <u>om</u> 24 25 20 25</b><br>
       <b> 13 23 2 21 14 <u>te</u> 16 3 8 24 25 8.</b></label>
                           <div>".$zin_3."</div>
                        </div>";
    }
  
   if(isset($_POST['zin_4'])) {
        $visitor_message = htmlspecialchars($_POST['zin_1']);
        $email_body .= "<div>
                           <label>Zin 4:<b><u>Uw</u> 20 9 25 5 14 9 23 2 14</b><br>
             <b> 22 25 1 3 8 14 <u>in de</u> 20 21 21 6</b><br>
             <b> 17 21 21 12 <u>de</u> 5 6 25 3 8 13 14 25 8</b><br>
             <b><u>van de</u> 1 25 7 25 25 8 13 23 2 21 10</b><br>
             <b> 13 21 7 25 8 5 9 7 25 8.</b></label>
                           <div>".$zin_4."</div>
                        </div>";
    }
  
   if(isset($_POST['zin_5'])) {
        $visitor_message = htmlspecialchars($_POST['zin_1']);
        $email_body .= "<div>
                           <label>Zin 5:<b>13 15 23 23 25 13!</b></label>
                           <div>".$zin_5."</div>
                        </div>";
    }
  
    $email_body .= "</div>";
    $recipient = "escaperoomhveenapgen@gmail.com";
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($recipient, $zin_1, $zin_2, $zin_3, $zin_4, $zin_5, $email_body, $headers)) {
        echo "<p>Bedankt voor het versturen, $voornaam. Ga verder naar de volgende locatie zoals genoemd in deze brief.</p>";
    } else {
        echo '<p>Er ging iets mis en uw antwoord is niet verzonden. Neem contact op met de 18+ kring.</p>';
    }
      
} else {
    echo '<p>Neem contact op met de 18+ kring</p>';
}
?>
